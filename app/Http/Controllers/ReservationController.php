<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class ReservationController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "All"]
        ];
    
        return view('pages.reservation-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function addnew(Request $request){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "New"]
        ];

        $salute = DB::table('salutations')->get();
        $rsvntype=$request->session()->get('rsvntype');
        return view('pages.reservation-new',compact('pageConfigs','breadcrumbs','rsvntype','salute'));
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

      public function test(){
        //dd(DB::select('desc reservations'));
       dd(DB::select('desc memberships'));
       dd(DB::select('desc leads'));
        //dd(DB::select('desc accommodations'));
        //dd(DB::select('desc reservation_types'));
      }
    
}
