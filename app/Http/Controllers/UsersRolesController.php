<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ICTRequestAdmin;
use DB;



class UsersRolesController extends Controller
{
    public function ictrequest(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
        // $ict = ICTRequestAdmin::all();
        //   ->join('')
        // ;
          $ict = DB::table('ict_requests')
            ->join('memberships', 'memberships.mbrship_id', 'ict_requests.mbrship_id')
            ->join('departments', 'departments.dept_id', 'ict_requests.dept_id')
            ->join('staffs', 'staffs.staff_id', 'ict_requests.approval_by')
            
            ->select('ict_requests.ict_req_id','memberships.mbrship_no','departments.dept','ict_req_created_at','staffs.staff_name','ict_requests.ict_req_status')
            ->get();
        // dd($ict);

        $payload = ['ict'=>$ict];

        // dd($ict);
    
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function changestatus($ict_id, $ict_status)
      {


      

            if ($ict_status == 0)
            {
                  $update = DB::table('ict_requests')->where('ict_req_id', $ict_id)
                  ->update(['ict_req_status'=> 2]);
            } 
         
        return redirect('admin/ictrequest');
      }

      public function newictrequestpoint(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
    
        return view('pages.ictrequest-new-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function newictrequestacc(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
    
        return view('pages.ictrequest-new2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }
    
      public function ictrequestaccdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
    
        return view('pages.ictrequest-details2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function ictrequestptdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
    
        return view('pages.ictrequest-details-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function userroles(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function roledetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.roles-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function basicpermissions(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.basic-permissions',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function approvals(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.approvals-users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


}
