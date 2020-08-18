<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Excel;
use App\Leads;
use App\Membership;
use App\StampingFeeList;
use App\StampingFeeBatch;
use App\Exports\StampingFeeExport;
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
      // dd($request->mbrship_no);
      $check = DB::table('stamping_fee_list')->where([['sfb_id',$batch_id],['mbrship_no',$request->mbrship_no]])->get();

      Membership::where('mbrship_no',$request->mbrship_no)->update(['has_stamped'=>1]);

      if(count($check))
      {
        return redirect()->back()->with('alert','The membership exist in this list already');
      }
      else
      {   
        DB::table('stamping_fee_list')->insert([
              'sfb_id'=>$batch_id,
              'mbrship_no'=>$request->mbrship_no
            ]);
        
        Membership::where('mbrship_no',$request->mbrship_no)->update(['has_stamped'=>1]);

        return redirect("report/stampingfee/".$batch_id."/details");

      }
      
    }

    public function deleteStamp(Request $request, $batch_no)
    {
      // dd($request->mbrship_no);
      StampingFeeList::where([['sfb_id', $batch_no],['mbrship_no',$request->mbrship_no]])->delete();

      Membership::where('mbrship_no',$request->mbrship_no)->update(['has_stamped'=>0]);
    
      return redirect("report/stampingfee/".$batch_no."/details");
    }

    public function changeStatus(Request $request)
    {
      if($request->status_no == 1)
      {
          StampingFeeBatch::where('sfb_id', $request->batch_id)->update([
            'sfb_status'=>1, 
            'sfb_req_at'=>$request->request_date
            ]);
      }
      else if ($request->status_no == 2)
      {
        StampingFeeBatch::where('sfb_id', $request->batch_id)->update([
          'sfb_status'=>2, 
          'sfb_check_at'=>$request->check_date
          ]);
      }
      else if ($request->status_no == 3)
      {
        StampingFeeBatch::where('sfb_id', $request->batch_id)->update([
          'sfb_status'=>3, 
          'sfb_approved_at'=>$request->approved_date
          ]);
      }
      else if ($request->status_no == 4)
      {
        StampingFeeBatch::where('sfb_id', $request->batch_id)->update([
          'sfb_status'=>4, 
          'sfb_sent_at'=>$request->sent_date
          ]);
      }
      else
      {
          dd("Failed");
      }

      return redirect("report/stampingfee/");
    }

    public function exportExcel(Request $request, $batch_id)
    {
      return Excel::download(new StampingFeeExport($request->batch_id), 'stamping.xlsx');
    }

    public static function countResult($batch_id)
    {
      $result = DB::table('stamping_fee_list')->where('sfb_id', $batch_id)->get();

      return count($result);
    }

}
