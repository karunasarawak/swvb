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
        $rsvntype=$request->session()->get('rsvntype');
        if(empty($rsvntype)){
          $rsvntype='hotel';
          //return redirect('reservations');
        }
        if($rsvntype=='hotel'){
          $payload['accommodations']=DB::table('accommodations')->get();
          $payload['travel_agents']=DB::table('travel_agents')->get();
        }else{
          //$payload['facilities']=DB::table('facilities')->get();
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
        $md['package']=DB::table('packages')->where('package_id',$md->package_id)->first();
        $md['installment_schedule']=DB::table('installment_schedule')->where('install_schedule_id',$md->install_schedule_id)->first();
       // $md['entpoint']=DB::table('ent_point_schedule')->where('mbrship_id',$md->mbrship_id)->get();
        echo json_encode($md);
      }
      public function test(){
        dd(DB::select('select * from vouchers'));
        //dd(DB::select('desc reservation_types'));
      } 
}
