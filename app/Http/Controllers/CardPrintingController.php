<?php

namespace App\Http\Controllers;

use App\CardPrinting;
use Illuminate\Http\Request;
use DB;

class CardPrintingController extends Controller
{
    public function index(){

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
    
        return view('pages.cardprintinglist', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function showCardBatchDetails()
      {

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "Batch Details"]
        ];

        $memberships = DB::table('memberships')
                      ->join('leads', 'leads.lead_id','memberships.lead_id1')
                      ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                      ->select('memberships.mbrship_id','memberships.mbrship_no','leads.name','lead2.name as name2','memberships.mbrship_exp')
                      ->get();
        
        // dd($memberships);

        $payload = ['memberships'=>$memberships];
    
        return view('pages.cardprintinglist-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function showReadyPrint()
      {
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "Ready to Print"]
        ];

        //Assuming Activate = 2
        $mbrship = DB::table('memberships')->where([['has_card',0],['mbrship_status',2]])
                  ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                  ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                  ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status')
                  ->get();
        // dd($mbrship);

        $payload = ['mbrship'=>$mbrship];
    
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
        DB::table('stamping_fee_batch')->insert([
          'batch_no'=> null,
          'sfb_req_by'=> null,
          'sfb_approved_by' =>null,
          'penalty' => null,
          'sfb_req_at' => null,
          'sfb_approved_at' => null,
          'sfb_sent_at' => null,
          'sfb_status' => null 
        ]);

        $sfb_id = DB::getPDO()->lastInsertId();

        for($i = 1; $i < $request_count; $i++)
        {
          $value = "check".$i;
          $mbrship_no = $request->$value;

          DB::table('stamping_fee_list')->insert([
              'sfb_id'=>$sfb_id,
              'mbrship_id'=>$mbrship_no
          ]);
          
        }
    
        return redirect('cardprintinglist');
      }

      // public function dispatch()
      // {
      //   $pageConfigs = ['pageHeader' => true];
    
      //   $breadcrumbs = [
      //     ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Card Printing List"],["name" => "Ready to Print"]
      //   ];
    
      //   return view('pages.membershipdeckdispatch-wlcletter', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
        
      // }
}
