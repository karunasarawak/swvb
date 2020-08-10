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
    
       
          $ict = DB::table('ict_requests')
            ->join('memberships', 'memberships.mbrship_id', 'ict_requests.pict_mbrship_id')
            // ->join('points_adjustments', 'points_adjustments.pict_req_id','ict_requests.pict_req_id')
            ->join('staff as s1', 's1.staff_id', 'ict_requests.pict_req_by')
            ->join('staff as s2', 's2.staff_id', 'ict_requests.pict_approval')
            ->join('staff as s3', 's3.staff_id', 'ict_requests.pict_verifier')
            ->join('departments', 'departments.dept_id', 's1.role_id')
            
            ->select('departments.dept','ict_requests.pict_req_id','memberships.mbrship_no','ict_requests.pict_req_created_at',
            's1.staff_name','s2.staff_name','s3.staff_name','ict_requests.pict_req_status')
            ->get();
        

        $payload = ['ict'=>$ict];

        // dd($ict);
    
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function ictredirect(Request $request){

   
        if ($request-> icttype =='point')
        {
          return redirect('admin/newictrequestpoint');
        }
        else if ($request-> icttype =='acc')
        {
          return redirect('admin/newictrequestacc');
        }
         
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }


      public function changestatus($ict_id, $ict_status)
      {

            if ($ict_status == 0)
            {
                  $update = DB::table('ict_requests')->where('pict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 1]);
            } 
            
            else if ($ict_status == 1)
            {
                  $update = DB::table('ict_requests')->where('pict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 2]);
            } 
            else if ($ict_status == 2)
            {
                  $update = DB::table('ict_requests')->where('pict_req_id', $ict_id)
                  ->update(['pict_req_status'=> 3]);
            } 


         
        return redirect('admin/ictrequest');
      }

      public function rejectstatus($ict_req_id)
      {
            
          $update = DB::table('ict_requests')->where('pict_req_id', $ict_req_id)
          ->update(['pict_req_status'=> 4]);
            
        return redirect('admin/ictrequest');
      }

      public function newictrequestpoint(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
       
          $staff = DB::table('staff')->get();

          // $pointsadjustment = PointsAdjustments::all();

          $memberships = Membership::with('lead')
                ->join('reservations','reservations.mbrship_id', 'memberships.mbrship_id')
                ->get();

          $payload = ['memberships'=>$memberships,
                      'staff'=>$staff, 
                      // 'pointsadj'=>$pointsadjustment
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
                'mbrship_id'=>$group5['mbrship_id1'],
                'wd'=>$group5['wd5'],
                'we'=>$group5['we5'],
                'expiry_date'=>$group5['expiry_date5'],
                
              ];
          }
             

          $ictreq = DB::table('ict_requests')->insert([
                'pict_mbrship_id'=>$request->mbrship_id,
                'pict_req_by'=>$request->requested_by,
                'pict_approval'=>$request->approved_by,
                'pict_verifier'=>$request->verified_by,
                
          ]);

          $pict_req_id = DB::getPDO()->lastInsertId();

          $req_id = DB::table('points_adjustments')
          ->where('pict_req_id', )
          ->update(['pict_req_id'=>$pict_req_id]);

              // PointsAdjustments::insert($req_id); 
              PointsAdjustments::insert($cai); 
              PointsAdjustments::insert($evcreinstate); 
              PointsAdjustments::insert($evcexp); 
              PointsAdjustments::insert($evcaddb); 
              PointsAdjustments::insert($evcaddmbr); 
              
        

        return redirect('admin/newictrequestpoint');
      }

      public function newictrequestacc(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
        $staff = DB::table('staff')->get();

        // $pointsadjustment = PointsAdjustments::all();

        $memberships = Membership::with('lead')
              ->join('reservations','reservations.mbrship_id', 'memberships.mbrship_id')
              ->get();

        $payload = ['memberships'=>$memberships,
                    'staff'=>$staff, 
                    // 'pointsadj'=>$pointsadjustment
                ];  

        // dd($memberships);


        return view('pages.ictrequest-new2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }
    
      public function ictrequestptdetails($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
 
        $memberships = DB::table('ict_requests')
        ->join('memberships', 'memberships.mbrship_id', 'ict_requests.pict_mbrship_id')
        ->join('reservations', 'reservations.mbrship_id', 'memberships.mbrship_id')
        ->join('leads', 'leads.lead_id', 'memberships.lead_id1')
        ->where('ict_requests.pict_req_id', $id)
        ->select('memberships.mbrship_no', 'leads.name', 'reservations.rsvn_no')
        ->get();


        $pointsadjustmenttype1 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','1']])
        ->select('points_adjustments.poe_year','points_adjustments.we','points_adjustments.wd','points_adjustments.expiry_date')
        ->get();

        $pointsadjustmenttype2 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','2']])
         ->select('points_adjustments.poe_year', 'points_adjustments.we','points_adjustments.wd', 'points_adjustments.expiry_date')
        ->get();

        $pointsadjustmenttype3 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','3']])
         ->select('points_adjustments.poe_year',  'points_adjustments.expiry_date')
        ->get();

        $pointsadjustmenttype4 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','4']])
         ->select('points_adjustments.poe_year', 'points_adjustments.we','points_adjustments.wd', 'points_adjustments.expiry_date')
        ->get();

        $pointsadjustmenttype5 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        ->join('memberships', 'memberships.mbrship_id','points_adjustments.mbrship_id')
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','5']])
         ->select('memberships.mbrship_no', 'points_adjustments.we','points_adjustments.wd', 'points_adjustments.expiry_date')
        ->get();

        
        $payload = ['pointadj1' => $pointsadjustmenttype1,
                    'pointadj2' => $pointsadjustmenttype2,
                    'pointadj3' => $pointsadjustmenttype3,
                    'pointadj4' => $pointsadjustmenttype4,
                    'pointadj5' => $pointsadjustmenttype5,
                    'members'=> $memberships[0]
        ];
        // dd($memberships); 
    
        return view('pages.ictrequest-details-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function ictrequestaccdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
       

        return view('pages.ictrequest-details2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

     

      public function userroles(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];

          $roles = DB::table('staff_roles')
                  ->join('staff', 'staff.role_id', 'staff_roles.role_id')
                  
                  ->select('staff_roles.role', 'staff_roles.code', 'staff.is_active', 'staff_roles.dept_id', 'staff_roles.role_id'
                  ,'staff.staff_name')
                  ->get();

        
          // dd($roles);
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
                'role_id'=>$request->role_id,
          ]);

          return redirect('userroles');
     }

      public function roledetails($id){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];


              // $leads = [];
              $module = array('Leads', 'Tours', 'Vouchers', 'Stamping Fee Request', 'Membership',
                                'Contract','Points/Entitlement','External Memberships','Payment Details',
                                'Method','Credentials','Installment & AMF Schedule', 'Deck Dispatch', 'Supplier',
                                'Member','Account Statement'
                    );

              

              $payload = ['module'=>$module,
                          
            ];

            // dd($payload);
    
        return view('pages.roles-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function newusersstaff(Request $request){
    
        $newstaff = DB::table('staff')
            ->insert([
                  
                  'staff_name'=>$request->staff_name,
                  'role_id'=>$request->role1,
                  'staff_name'=>$request->staff_name,
                  'email'=>$request->email
            ]);

      
        return redirect('userroles');
      }

      public function basicpermissions(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.basic-permissions',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function uploadsignature(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];


    
        return view('pages.users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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

      public function cardterminalchargetype(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.cardterminal-chargetype',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      public function accccdn(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.selections-acc&ccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
    }