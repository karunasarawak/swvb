<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ICTRequestAcc;
use App\Membership;
use App\Staff_Roles;
use App\Staff;
use App\PointsAdjustment;
use App\ICTRequestPoint;
use App\BasicPermission;
use App\AccountAdjustment;
use App\InvoiceItemType;
use App\Accommodation;
use App\DocumentType;
use App\Invoice;
use DB;


class UsersRolesController extends Controller
{
    public function ictrequest(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "All"]
        ];
    
          // $ict2 = ICTRequestPoint::all();        

          $ict = ICTRequestPoint::get();

          $acc = ICTRequestAcc::get();
            // ->join('memberships', 'memberships.mbrship_id', 'ict_requests.pict_mbrship_id')
            // ->join('points_adjustments', 'points_adjustments.pict_req_id','ict_requests.pict_req_id')
           
            // ->join('departments', 'departments.dept_id', 'staff.role_id')
            
            // ->select('ict_requests.pict_req_id','memberships.mbrship_no','ict_requests.pict_req_created_at',
            // 'ict_requests.pict_req_status')
            // ->get();
        

        $payload = ['ict'=>$ict,
                    'acc'=>$acc  
        ];
      
        // dd($payload);
    
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
         
        return redirect('admin/ictrequest');
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

          $memberships = Membership::all();
               
          $payload = ['memberships'=>$memberships,
                      'staff'=>$staff, 
                     
                  ];  

          // dd($memberships);
    
        return view('pages.ictrequest-new-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function storeictrequestpoint(Request $request){


        $ictreq = DB::table('ict_requests')->insert([
          'pict_mbrship_id'=>$request->mbrship_id,
          'pict_req_by'=>$request->requested_by,
          'pict_approval'=>$request->approved_by,
          'pict_verifier'=>$request->verified_by,
          
        ]);

        $pict_req_id = DB::getPDO()->lastInsertId();

        
          foreach($request->group1 as $group1){
            $cai[] = [
                'pict_req_id'=>$pict_req_id,
                'req_type'=>1,
                'poe_year'=>$group1['poe_year1'],
                'points'=>$group1['points1'],
                'expiry_date'=>$group1['expiry_date1'],
                
              ];
          }

      
          foreach($request->group2 as $group2){
            $evcreinstate[] = [
                'req_type'=>2,
                'pict_req_id'=>$pict_req_id,
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
                'pict_req_id'=>$pict_req_id,
                'expiry_date'=>$group3['expiry_date3'],
                
              ];
          }

          foreach($request->group4 as $group4){
            $evcaddb[] = [
                'req_type'=>4,
                'pict_req_id'=>$pict_req_id,
                'poe_year'=>$group4['poe_year4'],
                'wd'=>$group4['wd4'],
                'we'=>$group4['we4'],
                'expiry_date'=>$group4['expiry_date4'],
                
              ];
          }
             
          foreach($request->group5 as $group5){
            $evcaddmbr[] = [
                'req_type'=>5,
                'pict_req_id'=>$pict_req_id,
                'mbrship_id'=>$group5['mbrship_id1'],
                'wd'=>$group5['wd5'],
                'we'=>$group5['we5'],
                'expiry_date'=>$group5['expiry_date5'],
                
              ];
          }
             
              PointsAdjustment::insert($cai); 
              PointsAdjustment::insert($evcreinstate); 
              PointsAdjustment::insert($evcexp); 
              PointsAdjustment::insert($evcaddb); 
              PointsAdjustment::insert($evcaddmbr); 

        return redirect('admin/newictrequestpoint');
      }

      public function newictrequestacc(Request $request){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "New"]
        ];
    
        $data = Invoice::select('no', 'id')->where('doc_id', $request->id)->take(100)->get();

        $staff = DB::table('staff')->get();

        $invoiceitemtype = InvoiceItemType::all();

        $memberships = Membership::all();

        $acc = AccountAdjustment::all();

        $doc = DocumentType::all();

        $payload = [
                    'staff'=>$staff, 
                    'memberships'=>$memberships,
                    'invoiceitemtype'=>$invoiceitemtype,
                    'acc'=>$acc,
                    'doc'=>$doc
                ];  

        // dd($acc);

        if ($request->ajax()){
            return response()->json($data);
        }

        return view('pages.ictrequest-new2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }
    
      public function ictrequestptdetails($id){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "Points Adjustments Details"]
        ];
 
        // $memberships = DB::table('ict_requests')
        // ->join('memberships', 'memberships.mbrship_id', 'ict_requests.pict_mbrship_id')
        // ->join('reservations', 'reservations.mbrship_id', 'memberships.mbrship_id')
        // ->join('leads', 'leads.lead_id', 'memberships.lead_id1')
        // ->where('ict_requests.pict_req_id', $id)
        // ->select('memberships.mbrship_no', 'leads.name', 'reservations.rsvn_no')
        // ->get();
        $ict = ICTRequestPoint::where('pict_req_id', $id)->get(); 

        $pointsadjustmenttype1 = DB::table('points_adjustments')
        ->join('ict_requests', 'ict_requests.pict_req_id', 'points_adjustments.pict_req_id')
        
        ->where([['ict_requests.pict_req_id', $id], ['req_type','=','1']])
        // ->select('points_adjustments.poe_year','points_adjustments.we','points_adjustments.wd','points_adjustments.expiry_date')
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
                    'ict'=> $ict[0],
                    
        ];{{  }}
        // dd($membership); 
    
        return view('pages.ictrequest-details-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function updatepoint(Request $request, $id){


        PointsAdjustment::where([['pict_req_id','=', $id],['req_type','=','1']])->update([
                'poe_year'=>$request->poe_year1,
                'points'=>$request->points1,
                'expiry_date'=>$request->expiry_date1,
        ]);

        PointsAdjustment::where([['pict_req_id','=', $id],['req_type','=','2']])->update([
                'poe_year'=>$request->poe_year2,
                'wd'=>$request->wd2,
                'we'=>$request->we2,
                'expiry_date'=>$request->expiry_date2,
        ]);

        PointsAdjustment::where([['pict_req_id','=', $id],['req_type','=','3']])->update([
              'poe_year'=>$request->poe_year3,
              
              'expiry_date'=>$request->expiry_date3,
        ]);

        PointsAdjustment::where([['pict_req_id','=', $id],['req_type','=','4']])->update([
            'poe_year'=>$request->poe_year4,
            'wd'=>$request->wd4,
            'we'=>$request->we4,
            'expiry_date'=>$request->expiry_date4,
        ]);

        PointsAdjustment::where([['pict_req_id','=', $id],['req_type','=','5']])->update([
          
            'wd'=>$request->wd5,
            'we'=>$request->we5,
            'expiry_date'=>$request->expiry_date5,
        ]);

        // PointsAdjustment::insert($updatereq1);
        // PointsAdjustment::insert($updatereq2);
        // PointsAdjustment::insert($updatereq3);
        // PointsAdjustment::insert($updatereq4);
        // PointsAdjustment::insert($updatereq5);

        // $request->file->storage('public');

        return redirect('/admin/'.$id.'/ictptdetails');
      }

      
      public function storeictrequestacc(Request $request){
  

        $ictacc = DB::table('acc_ict_requests')->insert([
              'aict_mbrship_id'=>$request->mbrship_id,
              'aict_requested_by'=>$request->requested_by,
              'aict_verifier'=>$request->verified_by,
              'aict_approval'=>$request->approved_by,
              
        ]);

        $aict_req_id = DB::getPDO()->lastInsertID();
        
        foreach($request->group1 as $group1){
          $invoice[] = [
              'aict_req_id'=>$aict_req_id,
              'doc_type'=>$group1['doc_type1'],
              'unit_price'=>$group1['unit_price1'],
              'rounding'=>$group1['rounding1'],
              'total_price'=>$group1['total_price1'],
            ];
        }

    
        foreach($request->group2 as $group2){
          $issue[] = [
              'aict_req_id'=>$aict_req_id,
              'doc_type'=>$group2['doc_type2'],
              'doc_id'=>$group2['doc_id2'],
              'unit_price'=>$group2['unit_price2'],
              'rounding'=>$group2['rounding2'],
              'total_price'=>$group2['total_price2'],
              
            ];
        }

        foreach($request->reason as $r)
        {
              $check = new AccountAdjustment;
              // $check->name = $request->name;
              $check->reason = $r;
              
              $check->save();

        }

            AccountAdjustment::insert($invoice); 
            AccountAdjustment::insert($issue); 
           
      return redirect('admin/newictrequestacc');
    }


      public function ictrequestaccdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "ICT Request"],["name" => "Account Adjustments Details"]
        ];
    
          $details = AccountAdjustment::all();
          $acc = ICTRequestAcc::all();

          $payload= ['details' => $details,
                      'acc'=> $acc[0]
          ];

          // dd($acc);

        return view('pages.ictrequest-details2-admin', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

     

      public function userroles(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Users & Roles"],["name" => "All"]
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

      public function roledetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Users & Roles"],["name" => "Role Details"]
        ];

          $staff = Staff::all();

              // $leads = [];
              $module = array('Leads', 'Tours', 'Vouchers', 'Stamping Fee Request', 'Membership',
                                'Contract','Points/Entitlement','External Memberships','Payment Details',
                                'Method','Credentials','Installment & AMF Schedule', 'Deck Dispatch', 'Supplier',
                                'Member','Account Statement', 'MSD', 'Report 1','Report 2', 'Report 3', 'MRD',
                                'Report 4','Activate', 'Be Back','Withdraw','Cancel','Suspend', 'Terminate','Transfer',
                                'Deceased','Upgrade/Downgrade', 'Repurchase'    
                    );

              $approval = array('ICT Requests', 'Special Reservation Requests', 'Expired Voucher Usage Request', 'RCI Bulk Banking', 'II Reserved Unit',
                          'Edit reservations level 1','Edit reservations level 2','Point/Entitlement Advancement','Refund',
                          'Suspend','Tourism Tax'    
              );

              $notifications = array('Call', 'Tour', 'Installment Schedule', 'Advance/Borrow', 'BB Left 2 Week',
              'Offset Reminder','Special Approval','Refund','Aging','CC Exp','Activation',
              'Reinstate','Suspend'    
              );
      
              $payload = ['module'=>$module,
                          'approval'=>$approval,
                          'notifications'=>$notifications,
                          'staff'=>$staff[0]
                          
            ];

            // dd($staff);

        return view('pages.roles-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function storerolecheckbox(Request $request, $id){

          $p = $request->all();
          $module = array('Leads', 'Tours', 'Vouchers', 'StampingFeeRequest', 'Membership',
                            'Contract','PointsEntitlement','ExternalMemberships','PaymentDetails',
                            'Method','Credentials','Installment&AMFSchedule', 'DeckDispatch', 'Supplier',
                            'Member','AccountStatement', 'MSD', 'Report1','Report2', 'Report3', 'MRD',
                            'Report4','Activate', 'BeBack','Withdraw','Cancel','Suspend', 'Terminate','Transfer',
                            'Deceased','UpgradeDowngrade', 'Repurchase'    
                );

          // dd($module);

          for ($i = 0; $i < sizeof($module); $i++){

            $permission = "";
        
            $c = $module[$i] . "_c";
            $v = $module[$i] . "_v";
            $e = $module[$i] . "_e";
            
            if(isset($request->$c)){
                $permission .= "c";
            }
        
            if(isset($request->$v)){
                $permission .= "v";
            }
            
            if(isset($request->$e)){
                $permission .= "e";
            }
        
            BasicPermission::insert([
                ['module' => $module[$i], 'permission' => $permission, 'role_id' => $id]
            ]);
          }

            $approval = array('ICTRequests', 'SpecialReservationRequests', 'ExpiredVoucherUsageRequest', 
                          'RCIBulkBanking', 'IIReservedUnit','EditReservationsLevel1','EditReservationsLevel2','PointEntitlementAdvancement','Refund','Suspend','TourismTax'    
              );

              // dd(sizeof($approval));

              // $size = sizeof($approval);

              for ($i = 0; $i < sizeof($approval); $i++){

                $a = "";
            
                $check1 = $approval[$i] . "_c1";
                $check2 = $approval[$i] . "_c2";
                $verify1 = $approval[$i] . "_v1";
                $verify2 = $approval[$i] . "_v2";
                $approval1 = $approval[$i] . "_a1";
                $approval2 = $approval[$i] . "_a2";

                if(isset($request->$check1)){
                    $a .= "c1";
                }
            
                if(isset($request->$check2)){
                    $a .= "c2";
                }
                
                if(isset($request->$verify1)){
                    $a .= "v1";
                }

                if(isset($request->$verify2)){
                  $a .= "v2";
                }

                if(isset($request->$approval1)){
                  $a .= "a1";
                }
            
                if(isset($request->$approval2)){
                    $a .= "a2";
                }
               
            
                DB::table("adminpermissions")->insert([
                    ['approval_name' => $approval[$i], 'actions' => $a, 'role_id' => $id]
                ]);
              }
            
              $notifications = array('Call', 'Tour', 'Installment Schedule', 'Advance/Borrow', 'BB Left 2 Week',
              'Offset Reminder','Special Approval','Refund','Aging','CC Exp','Activation',
              'Reinstate','Suspend'    
              );

              for ($i=0; $i<sizeof($notifications); $i++){
                    $n = "";

                    $insystem = $notifications[$i] . "_isn";
                    $email = $notifications[$i] . "_e";
                    $emailcc = $notifications[$i] . "_ec";

                    if(isset($request->$insystem)){
                        $n .= "_isn";
                    }

                    if(isset($request->$email)){
                      $n .= "_e";
                    }
                    
                    if(isset($request->$emailcc)){
                      $n .= "_ec";
                    }

                    DB::table("notification_roles")->insert([
                      ['item' => $notifications[$i], 'notifications'=> $n, 'role_id'=>$id]
                    ]);
              }

              

            // dd($c);
            return redirect('roledetails');
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

      public function basicpermissions(Request $request){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Users & Roles"],["name" => "Basic Permissions"]
        ];


    
        return view('pages.basic-permissions',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function modifysignature(Request $request){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];

        $folderpath = public_path('upload/');
        
        $image_parts = explode(";base64,", $request->signed);

        $image_type_aux = explode("/image", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts);

        $file = $folderpath . uniqid() . '.' .$image_type;
        file_put_contents($file, $image_base64);
        return back()->with('success', 'success');
    
        return view('pages.users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function createsignature(Request $request){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];

        $request->image->store('images', 'public');

        // return "Signature Uploaded";
        // dd($request->image);
    
        return redirect('userroles')->with('message','Signature Uploaded Successfully');
      }

      public function approvals(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Approvals"],["name" => "All"]
        ];

        $row = array('ICT Requests', 'Special Reservation Requests','Expired Voucher Usage Request','RCI Bulk Banking
                    ','II Reserved Units','Edit Reservations Level 1','Edit Reservations Level 2', 'Point/Entitlement Advancement',
                    'Refund','Suspend','Tourism Tax');

        $payload = ['row'=>$row];
    

    
        return view('pages.attachments',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionmsd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Selections - MSD"],["name" => "All"]
        ];
    
        return view('pages.selections-msd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionmrd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Selections - MRD"],["name" => "All"]
        ];
    
        return view('pages.selections-mrd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      
      public function accommodation(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Accommodations"],["name" => "All"]
        ];
    
        $accmmdcai = Accommodation::where("club", 0)->get();
        $accmmdevc = Accommodation::where("club", 1)->get();

            $payload = ['accmmdcai'=>$accmmdcai,
                        'accmmdevc'=>$accmmdevc
            ];
        
        return view('pages.accommodations',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);     
      }

      public function newaccommodation(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Accommodation"],["name" => "Details"]
        ];
    
        $acccategory = DB::table("accommodation_categories")->get();

        $accmd = DB::table("accommodations")->get();

        $ta = DB::table("travel_agents")->get();
        $s = DB::table("seasons")->get();
        $lp = DB::table("late_penalties")->get();
        $states = DB::table("states")->get();
        $packages = DB::table("packages")->get();
        $cities = DB::table("cities")->get();
        $countries = DB::table("countries")->get();
        
        $payload=['acccategory'=>$acccategory,
                  'accmd'=>$accmd[0],
                  'ta'=>$ta,
                  's'=>$s,
                  'lp'=>$lp,
                  'states'=>$states,
                  'packages'=>$packages,
                  'cities'=>$cities,
                  'countries'=>$countries
          ];
            // dd($states);

        return view('pages.accommodation-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

 
      public function accommodationdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Accommodation"],["name" => "Details"]
        ];
    
        $acccategory = DB::table("accommodation_categories")->get();

        $accmd = DB::table("accommodations")->get();

        $ta = DB::table("travel_agents")->get();

        $s = DB::table("seasons")->get();

        $lp = DB::table("late_penalties")->get();


        
        $payload=['acccategory'=>$acccategory,
                  'accmd'=>$accmd[0],
                  'ta'=>$ta,
                  's'=>$s,
                  'lp'=>$lp
          ];
            // dd($accmd);

        return view('pages.accommodation-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function storeaccommodation(Request $request, $id){

              $accommodation = DB::table('accommodations')->insert([
                    'accom_name'=>$request->accom_name,
                    'accom_code'=>$request->accom_code,
                    'club'=>$request->club,
                    'accom_addr'=>$request->accom_addr,
                    'postcode'=>$request->postcode,
                    'state_id'=>$request->state_id,
                    'city_id'=>$request->city_id,
                    'country_id'=>$request->country_id,
                    'min_lead_time'=>$request->min_lead_time,
                    'max_lead_time'=>$request->max_lead_time,
                    'cxl_deadline'=>$request->cxl_deadline,
                    'min_stay'=>$request->min_stay,
                    'admin_charges'=>$request->admin_charges,
                    'postcode'=>$request->postcode,
                    'package_status'=>$request->package_status,

              ]);

              $acccategory = DB::table('accommodation_categories')->insert([
                    'accom_cat_id'=>$request->accom_cat_id
              ]);

              $ta = DB::table('travel_agents')->insert([
                    'ta_id'=>$request->ta_id
              ]);

              $breakfast = DB::table('reservation_breakfast_prices')->insert([
                    'min_pax'=>$request->min_pax,
                    'max_pax'=>$request->max_pax,
                    'price_per_pax'=>$request->price_per_pax,
              ]);

              $penalty = DB::table('late_penalties')->insert([
                    'check_in_start'=>$request->check_in_start,
                    'check_out_start'=>$request->check_out_start,
              ]);

              foreach($request->group1 as $group1){
                    $breakfast[] = [
                          'min_pax'=>$group1['min_pax'],
                          'max_pax'=>$group1['max_pax'],
                          'price_per_pax'=>$group1['price_per_pax'],
                    ];
              }

              foreach($request->group2 as $group2){
                $season[] = [
                      'season'=>$group1['season'],
                      'start_date'=>$group1['start_date'],
                      'end_date'=>$group1['end_date']
                ];
              }

              DB::table('reservation_breakfast_prices')->insert();
              DB::table('seasons')->insert();

      }

      public function unitdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Accommodation"],["name" => "Unit Type Details"]
        ];

        return view('pages.accommodation-unittypedetails',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function facilities(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Facilities"],["name" => "All"]
        ];
    
        return view('pages.facilities',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function facilitiesdetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Facilities"],["name" => "Facilities Details"]
        ];
    
        return view('pages.facilities-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function eventlogs(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Event Logs"],["name" => "All"]
        ];
    
        return view('pages.eventlogs-admin',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionaccccd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Selections - ACC & CCD"],["name" => "All"]
        ];
    
        return view('pages.selections-accccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function selectionict(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Selection ICT"],["name" => "All"]
        ];
    
        return view('pages.selections-ict',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function cardterminal(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Card Terminal"],["name" => "All"]
        ];
    
        return view('pages.card-terminal',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

       public function cardterminalchargetype(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Card Terminal"],["name" => "Charge Type"]
        ];
    
        return view('pages.cardterminal-chargetype',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function accccd(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "ACC & CC Management"],["name" => "Invoice Header"]
        ];
    
        return view('pages.selections-accccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function accccdn(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Selections ACC & CCD"],["name" => "All"]
        ];
    
        return view('pages.selections-acc&ccd',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


      public function taxinterest(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Tax & interest"],["name" => "All"]
        ];
    
        return view('pages.tax-interests',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function branches(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Branches"],["name" => "All"]
        ];
    
        return view('pages.branches',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);

         
      }
 
     

      public function contactsetup(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Contacts Set Up"]
        ];
    
        return view('pages.contact-setup',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);     
      }

      public function attachments(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Attachments"],["name" => "All"]
        ];
    
        return view('pages.attachments',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);     
      }

      public function ptentitlement(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Point Entitlements"],["name" => "All"]
        ];
    
        return view('pages.points&entitlements-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);     
      }

     
      public function packages(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Packages"],["name" => "All"]
        ];
    
        return view('pages.packages',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);     
      }
    }