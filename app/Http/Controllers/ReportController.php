<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Leads;
use App\Membership;
use App\StampingFeeList;

use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    public function activitylog()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Report"],["name" => "Activity Log"]
      ];

      return view('pages.activitylog',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    
    public function stampingfeedetails()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Details"]
      ];


      return view('pages.stampingfee-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    public function download()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Stamping Fee Listing"],["name" => "Download"]
      ];
      
      // https://appdividend.com/2019/09/13/laravel-6-generate-pdf-from-view-example-tutorial-from-scratch/
      

      return view('pages.stampingfeeprintdownload',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }


    public function calculator()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Calculator"]
      ];


      return view('pages.installmentschedule-calculator',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    public function amfdetails()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "AMF Schedule Detail"]
      ];


      return view('pages.amfschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    public function amfall()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "All"]
      ];


      return view('pages.installment-amfall',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

     //Stamping Fee
    public function showReadyStamp()
    {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Stamping Fee"],["name" => "Ready To Stamp"]
      ];

      $readyStamp = Membership::where([
        ['has_stamped',0],['mbrship_status',2]
      ])
      ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
      ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
      ->select('lead1.name as name1','lead2.name as name2','memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status')
      ->get();

      $payload=['readyStamp'=>$readyStamp];

      return view('pages.stampingfee-readyStamp', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function showBatchList()
    {

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Stamping Fee"],["name" => "All"]
      ];

      $list = DB::table('stamping_fee_batch')->get();
      $payload = ['list'=>$list];

      return view('pages.stampingfee', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }  

    public function createBatch(Request $request)
    {
      $request_count = count($request->all());

      //Create a new Batch
      DB::table('stamping_fee_batch')->insert(['sfb_status'=>0]);
      $sfb_id = DB::getPDO()->lastInsertId();

      // dd($request);

      $count = $request_count - 1;

      if($count != 0)
      {
        for($i = 0; $i < $count; $i++)
        {
          $value = "check".$i;

          if($request->has($value))
          {
            $mbrship_no = $request->$value;

            $add = DB::table('stamping_fee_list')->insert([
              'sfb_id'=>$sfb_id,
              'mbrship_no'=>$mbrship_no
            ]);

            Membership::where('mbrship_no',$mbrship_no)->update(['has_stamped'=>1]);
          }
        }
      }

      return redirect('report/stampingfee');
    }

    public function showBatchDetail($batch_id)
    {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Stamping Fee"],["name" => "Batch Details"]
      ];

      $batchDetail = DB::table('stamping_fee_batch')->where('sfb_id',$batch_id)->get();
      
      $stampList = DB::table('stamping_fee_list')->where([['sfb_id', $batch_id], ['mbrship_status',2]])
                  ->join('memberships', 'memberships.mbrship_no', 'stamping_fee_list.mbrship_no')
                  ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                  ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                  ->leftJoin('packages','packages.package_id','memberships.package_id')
                  ->select('lead1.name as name1','lead2.name as name2','lead1.nric','memberships.mbrship_exp', 'memberships.mbrship_no', 
                    'memberships.mbrship_status','memberships.agreement_date','packages.package_price')
                  ->get();

      $memberships = DB::table('memberships')->where('mbrship_status',2)
                  ->join('leads as lead1','lead1.lead_id','memberships.lead_id1')
                  ->leftJoin('leads as lead2', 'lead2.lead_id', 'memberships.lead_id2')
                  ->select('lead1.name as name1','lead2.name as name2',
                    'memberships.mbrship_exp', 'memberships.mbrship_no', 'memberships.mbrship_status', 'memberships.mbrship_id')
                  ->get();

      $payload = ['memberships'=>$memberships, 'batchDetail'=>$batchDetail[0] ,'stampList'=>$stampList];

      return view('pages.stampingfee-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function addNewStamp(Request $request, $batch_id)
    {
      $check = DB::table('stamping_fee_list')->where([
        'sfl_id'=>$batch_id,
        'mbrship_no'=>$request->mbrship_no
      ])->get();

      Membership::where('mbrship_no',$mbrship_no)->update(['has_stamped'=>1]);

      if(count($check) == true)
      {
        // dd($check[0]);
        return redirect()->back()->with('alert','The membership exist in this list already');

      }
      else if(count($check) == false)
      {   
        DB::table('stamping_fee_list')->insert([
              'sfl_id'=>$batch_id,
              'mbrship_no'=>$request->mbrship_no
            ]);
        
        Membership::where('mbrship_no',$request->mrship_no)->update(['has_stamped'=>1]);

        return redirect("report/stampingfee/".$batch_no."/details");

      }
      
    }

    public function deleteStamp(Request $request, $batch_no)
    {
      dd($request->mbrship_no);
      StampingFeeList::where([['sfb_id', $batch_no],['mbrship_no',$request->mbrship_no]])->delete();

      Membership::where('mbrship_no',$request->mbrship_no)->update(['has_stamped'=>0]);
    
      return redirect("report/stampingfee/".$batch_no."/details");
    }

}
