<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ICTRequestAdmin;
use App\Membership;
use App\Staff_Roles;
use App\Staffs;
use App\PointsAdjustments;
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
            ->join('departments', 'departments.dept_id', 'ict_requests.ict_req_id')
            ->join('staff', 'staff.staff_id', 'ict_requests.staff_id')
            
            ->select('departments.dept','ict_requests.pict_req_by','ict_requests.ict_req_id','memberships.mbrship_no','ict_requests.pict_req_created_at','staff.staff_name','ict_requests.pict_req_status')
            ->get();
        

        $payload = ['ict'=>$ict];

        // dd($ict);
    
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function changestatus($ict_id, $ict_status)
      {

            if ($ict_status == 0)
            {
                  $update = DB::table('ict_requests')->where('ict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 1]);
            } 
            
            else if ($ict_status == 1)
            {
                  $update = DB::table('ict_requests')->where('ict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 2]);
            } 
            else if ($ict_status == 2)
            {
                  $update = DB::table('ict_requests')->where('ict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 3]);
            } 


         
        return redirect('admin/ictrequest');
      }

      public function rejectstatus($ict_req_id)
      {
            
          $update = DB::table('ict_requests')->where('ict_req_id', $ict_req_id)
          ->update(['pict_req_status'=> 4]);
            
        return redirect('admin/ictrequest');
      }

      public function newictrequestpoint(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
       
          $staff = DB::table('staff')->get();

          $memberships = Membership::with('lead')
                ->join('reservations','reservations.mbrship_id', 'memberships.mbrship_id')
                ->get();

          $payload = ['memberships'=>$memberships,
                      'staff'=>$staff, 
                  ];  

          // dd($memberships);
    
        return view('pages.ictrequest-new-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function storeictrequestpoint(Request $request){

          foreach($request->group1 as $group1){
            $cai[] = [
                'req_type'=>1,
                'poe_year'=>$group1['poe_year1'],
                'points'=>$group1['points1'],
                'expiry_date'=>$group1['expiry_date1'],
                
              ];
          }

      
          foreach($request->group2 as $group2){
            $evcreinstate[] = [
                'req_type'=>2,
                'poe_year'=>$group2['poe_year2'],
                'wd'=>$group2['wd2'],
                'we'=>$group2['we2'],
                'expiry_date'=>$group2['expiry_date2'],

              ];
          }

          
          foreach($request->group3 as $group3){
            $evcexp[] = [
                'req_type'=>3,
                'poe_year'=>$group3['poe_year3'],
                
                'expiry_date'=>$group3['expiry_date3'],

              ];
          }

          foreach($request->group4 as $group4){
            $evcaddb[] = [
                'req_type'=>4,
                'poe_year'=>$group4['poe_year4'],
                'wd'=>$group4['wd4'],
                'we'=>$group4['we4'],
                'expiry_date'=>$group4['expiry_date4'],

              ];
          }
             
          foreach($request->group5 as $group5){
            $evcaddmbr[] = [
                'req_type'=>5,
                'mbrship_id'=>group5['mbrship_id'],
                'wd'=>$group5['wd5'],
                'we'=>$group5['we5'],
                'expiry_date'=>$group5['expiry_date5'],

              ];
          }
             
          

              PointsAdjustments::insert($cai); 
              PointsAdjustments::insert($evcreinstate); 
              PointsAdjustments::insert($evcexp); 
              PointsAdjustments::insert($evcaddb); 
              PointsAdjustments::insert($evcaddmbr); 
              // $cai_adjustment = DB::table('points_adjustment')->insert([
              //       'poe'=>$request->cai_use_year,
              //       'proposed_expdate'=>$request->cai_ped,
              //       'wd_points'=>$request->caipoints,
              // ]);

              // $evc_adjustment = DB::table('points_adjustment')->insert([
              //     'poe'=>$request->evc_use_yr,
              //     'proposed_expdate'=>$request->cai_ped,
              //     'wd_points'=>$request->evc_wd,
              //     'we'=>$request->evc_we,
              //     'proposed_expdate'=>$request->evc_ped,
              //   ]);

              //   $evc_poe_expirydate = DB::table('points_adjustment')->insert([
              //     'poe'=>$request->use_yr,
              //     'proposed_expdate'=>$request->ped,
            
              //   ]);


              //   $evc_add_bonus_ent = DB::table('points_adjustment')->insert([
              //     'poe'=>$request->use_yr2,
              //     'proposed_expdate'=>$request->ped2,
              //     'wd_points'=>$request->wd,
              //     'we'=>$request->we,
              //   ]);


              //   $evc_add_bonus_ent = DB::table('points_adjustment')->insert([
              //     'poe'=>$request->use_yr2,
              //     'proposed_expdate'=>$request->ped2,
              //     'wd_points'=>$request->wd2,
              //     'we'=>$request->we2,
              //     'proposed_expdate'=>$request->ped2,
              //   ]);


            
            // $memberships = DB::table('memberships')->insert([
            //       'mbrship_no'=>$request->mbrship_id,
            //       'mbrship_no'=>$request->name,

            // ]);

              // $pict_requests = DB::table('ict_requests')->insert([
              //       'poe'=>$request->poe,
              //       'poe'=>$request->poe,
              // ]);
    
        return redirect('admin/newictrequestpoint');
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

          $roles = DB::table('staff_roles')
                  ->join('staff', 'staff.role_id', 'staff_roles.role_id')
                  
                  ->select('staff_roles.role', 'staff_roles.code', 'staff.is_active', 'staff_roles.dept_id', 'staff_roles.role_id')
                  ->get();

          

          $payload = ['roles' => $roles];

        return view('pages.users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function activation($role_id, $is_active)
      {

         
          if ($is_active==0)
          $activate = DB::table('staff')->where('role_id', $role_id)
              ->update(['is_active'=> 1]);
          elseif ($is_active==1)
          $activate = DB::table('staff')->where('role_id', $role_id)
              ->update(['is_active'=> 0]);

            
        return redirect('userroles');
      }

     public function newroles(Request $request)
     {
          $roles = DB::table('staff_roles')->insert([
                'role'=>$request->role,
                'code'=>$request->code,
          ]);

          return redirect('userroles');
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

      public function taxinterest(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.tax-interests',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function branches(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.branches',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


      public function packages(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.packages',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function ptentitlement(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.points&entitlements-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function attachments(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.attachments',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionmsd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-msd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionmrd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-mrd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


      public function accommodation(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.accommodations',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function accommodationdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.accommodation-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


      public function unitdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.accommodation-unittypedetails',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function facilities(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.facilities',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function facilitiesdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.facilities-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function eventlogs(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.eventlogs-admin',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionaccccd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-accccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionict(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-ict',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function cardterminal(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.card-terminal',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function cardterminalchargetype(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.cardterminal-chargetype',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function acccc(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.acc&cc-management',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function accccdn(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-acc&ccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
}
