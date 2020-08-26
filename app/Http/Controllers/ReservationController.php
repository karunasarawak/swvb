<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;
use App\Membership;

class ReservationController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "All"]
        ];
    
        return view('pages.reservation-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function addnew(Request $request){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "New"]
        ];

        $payload['communication_channels']=[
            '0'=>'Walk in',
            '1'=>'Mobile',
            '2'=>'Whatsapp',
            '3'=>'SMS/MMS',
            '4'=>'Email',
            '5'=>'Post',
            '6'=>'Online',
            '7'=>'Fax'
        ];
        $payload['salute']=DB::table('salutations')->get();
        $payload['membership']=DB::table('memberships')->get();
        $payload['vouchers']=DB::table('vouchers')->get();
        $payload['nationalities']=DB::table('nationalities')->get();
        $rsvntype=$request->session()->get('rsvntype');
        if(empty($rsvntype)){
          $rsvntype='hotel';
          //return redirect('reservations');
        }
        if($rsvntype=='hotel'){
          $payload['accommodations']=DB::table('accommodations')->get();
          $payload['travel_agents']=DB::table('travel_agents')->get();
          $payload['reservation_types']=DB::table('reservation_types')->get();
         
        }else{
          //$payload['facilities']=DB::table('facilities')->get();
          $payload['accommodations']=DB::table('accommodations')->get();  
          $payload['travel_agents']=DB::table('travel_agents')->get();
        }
        return view('pages.reservation-new',compact('pageConfigs','breadcrumbs','rsvntype','payload'));
        //return view('pages.reservation-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function savenew(Request $request){
          print_r($request->all());
      }

      public function reservationredirect(Request $request){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Reservation"],["name" => "All"]
        ];

        // dd($request);
        $request->session()->put('rsvntype', $request -> rsvntype);
        return redirect('reservations/new');
        /*
        if($request -> rsvntype == 'hotel')
        {
          return redirect('reservations/new');
          //return view('pages.reservation-new');
        }
        else if ($request -> rsvntype == 'facilities')
        {
          return redirect('reservations/new');
         // return view('pages.reservation-new');
        }
        
           
        return view('pages.reservation-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        */
      }

      public function hoteldetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "New"]
        ];
    
        return view('pages.reservation-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function facilitydetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "Facility Reservation"]
        ];
    
        return view('pages.reservation-facilities-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function IIReserveUnitshowall(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "Facility Reservation"]
        ];
    
        return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }
  
      public function memberdetail($id){
        $md=Membership::where('mbrship_id',$id)->first();

        $s=DB::table('salutations')->where('salutation_id',$md['lead']->salutation_id)->first();
        $md['lead']->salutation=$s->salutation;
        if(!empty($md->lead_id2)){
          $md['lead2']=DB::table('leads')->where('lead_id',$md->lead_id2)->first();
          $s=DB::table('salutations')->where('salutation_id',$md['lead2']->salutation_id)->first();
          $md['lead2']->salutation=$s->salutation;
        }
        $md['package']=DB::table('packages')->where('package_id',$md->package_id)->first();
       // $md['lead_vouchers']=DB::table('lead_vouchers')->where('package_id',$md->package_id)->first();
        //$md['entpoint']=DB::table('ent_point_schedule')->where('mbrship_id',$md->mbrship_id)->get();
        $installment = DB::table('installments')->where('mbrship_id', $id)->first();
        $md['lpa'] = DB::table('installment_ent_point_schedules')->where('install_id', $installment->install_id)->get();
        echo json_encode($md);
      }

      public function getroom($id){
        $uts=DB::table('unit_types')->where('accom_id',$id)->get();
        $payload['inventories']=['<option value="">Please select the room no</option>'];
        $payload['unit_types']=['<option value="">Please select the room type</option>'];
        $payload['bed_types']=['<option value="">Please select the bed type</option>'];
        foreach($uts as $ut){
          $utd[$ut->unit_type_id]=$ut->unit_type;
          $invs=DB::table('inventories')->where('unit_type_id',$ut->unit_type_id)->get();
          foreach($invs as $inv){
            $payload['inventories'][]='<option value="'.$inv->inventory_id.'">'.$inv->unit_no.'</option>';
            $utc[$ut->unit_type_id][]='inv'.$inv->inventory_id;
          }
          $bed=DB::table('bed_types')->where('bed_type_id',$ut->bed_type_id)->first();
          $bedd[$bed->bed_type_id]=$bed->bed_type;
          $bedc[$bed->bed_type_id][]='unittype'.$ut->unit_type_id;
        }
        if(!empty($utd)){
          foreach($utd as $utv=>$utl){
            $payload['unit_types'][]='<option value="'.$utv.'" class="inv '.implode(' ',$utc[$utv]).'">'.$utl.'</option>';
          }
        }
        if(!empty($bedd)){
          foreach($bedd as $utv=>$utl){
            $payload['bed_types'][]='<option value="'.$utv.'" class="unittype '.implode(' ',$bedc[$utv]).'">'.$utl.'</option>';
          }
        }
        echo json_encode($payload);
       
      }

      public function test(){
      print_r(DB::select('select * from invoices'));
      // print_r(DB::select('show tables'));
      //print_r(DB::select('desc rci_bulk_bankings'));
      } 
}