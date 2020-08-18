<?php

namespace App\Http\Controllers;

use App\CardPrinting;
use App\CardPrintingBatch;
use App\Membership;
use Illuminate\Http\Request;
use DB;

class CardPrintingController extends Controller
{
    public function index()
    {

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership Deck Dispatch"],["name" => "Member"]
        ];
    
        return view('pages.membershipdeckdispatch-wlcletter', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
    }  

    public function showCardBatch()
    {

      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "All"]
      ];

      $list = DB::table('card_printing_batch')->get();
      $supplier = DB::table('suppliers')->get();

      $payload = ['list'=>$list, 'supplier'=>$supplier];
  
      return view('pages.cardprintinglist', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }  

    public function showCardBatchDetails($batch_id)
    {

      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "Batch Details"]
      ];

      $supplier = DB::table('suppliers')->get();
      $batchDetail = DB::table('card_printing_batch')->where('cpb_id',$batch_id)->get();

      $memberList = DB::table('card_printing_list')->where('cpb_id', $batch_id)
                  ->join('memberships', 'memberships.mbrship_no', 'card_printing_list.mbrship_no')
                  ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                  ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                  ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status')
                  ->get();

      $memberships = DB::table('memberships')->where('mbrship_status',2)
                ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status', 'memberships.mbrship_id')
                ->get();

      // dd($memberships);

      $payload = ['memberships'=>$memberships, 'batchDetail'=>$batchDetail[0] ,'memberList'=>$memberList, 'supplier'=>$supplier];
      // dd($payload);
  
      return view('pages.cardprintinglist-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function showReadyPrint()
    {
      $pageConfigs = ['pageHeader' => true];

        $breadcrumbs =  [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "Ready to Print"]
      ];
      // dd("HI");

      //Assuming Activate = 2
      $mbrship = Membership::where([
                  ['has_card',0],['mbrship_status',2]
                ])
                ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status')
                ->get();
      // dd($mbrship);
                
      $supplier = DB::table('suppliers')->get();

      $payload = ['mbrship'=>$mbrship, 'supplier'=>$supplier];

      return view('pages.cardprintinglist-readyPrint', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function createBatch(Request $request)
    {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership Deck Dispatch"],["name" => "Member"]
      ];

      $request_count = count($request->all());
      
      //Create a new Batch
      DB::table('card_printing_batch')->insert([
        'supplier_id'=> $request->supplier,
      ]);

      $cpb_id = DB::getPDO()->lastInsertId();

      $count = $request_count - 1;

      if($count != 0)
      {
        for($i = 0; $i < $count; $i++)
        {
          $value = "check".$i;

          if($request->has($value))
          {
            // dd($value);
            $mbrship_no = $request->$value;
            $add = DB::table('card_printing_list')->insert([
              'cpb_id'=>$cpb_id,
              'mbrship_no'=>$mbrship_no
            ]);

            Membership::where('mbrship_no',$mbrship_no)->update(['has_card'=>1]);
          }
        }
      }

      return redirect('cardprintinglist');
    }

    public function addNewCard(Request $request, $batch_id)
    {
      // dd($request->mbrship_no);
      $check = CardPrinting::where([
          ['cpb_id', '=', $batch_id], ['mbrship_no', '=', $request->mbrship_no]
        ])->get();

      Membership::where('mbrship_no',$mbrship_no)->update(['has_card'=>1]);

      if(count($check) == true)
      {
        // dd($check[0]);
        return redirect()->back()->with('alert','The membership exist in this list already');

      }
      else if(count($check) == false)
      {   
        DB::table('card_printing_list')->insert([
              'cpb_id'=>$batch_id,
              'mbrship_no'=>$request->mbrship_no
            ]);
        
        Membership::where('mbrship_no',$request->mrship_no)->update(['has_card'=>1]);

        return redirect("cardprintinglist/".$batch_id."/new");
      }
    }

    public function deleteCard(Request $request, $batch_no)
    {
      CardPrinting::where([['cpb_id', $batch_no],['mbrship_no',$request->mbrship_no]])->delete();
      Membership::where('mbrship_no',$request->mbrship_no)->update(['has_card'=>0]);
    
      return redirect("cardprintinglist/".$batch_no."/details");
    }

    public function changeStatus(Request $request)
    {

      if($request->status_no == 1)
      {
          // dd($request->batch_id);
          CardPrintingBatch::where('cpb_id', $request->batch_id)
                        ->update(['cpb_status'=>1, 'sent_date'=>$request->sent_date]);
      }
      else if ($request->status_no == 2)
      {
          CardPrintingBatch::where('cpb_id', $request->batch_id)
                      ->update([
                          'cpb_status'=>2, 
                          'invoice_no'=>$request->invoice,
                          'consignment_no'=>$request->consignment,
                          'courier_payment'=>$request->courier,
                          'receive_date'=>$request->receive_date
                        ]);
      }
      else
      {
          dd("Status: Failed");
      }

      return redirect("cardprintinglist");
    }

    public function generatePDF()
    {
      $batchDetail = DB::table('card_printing_batch')->where('cpb_id',$batch_id)->get();
    }

    public function cpdispatch(){
    
      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Dispatch"],["name" => "All"]
      ];
  
      return view('pages.dispatch',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

}