<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "All"]
        ];
    
        return view('pages.reservation-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function addnew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Reservation"],["name" => "New"]
        ];
    
        return view('pages.reservation-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function reservationredirect(Request $request){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Reservation"],["name" => "All"]
        ];

        // dd($request);
    
        if($request -> rsvntype == 'hotel')
        {
          return view('pages.reservation-new');
        }
        else if ($request -> rsvntype == 'facilities')
        {
          return view('pages.reservation-new');
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
    
}
