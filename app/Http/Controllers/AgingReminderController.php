<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgingReminderController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "All"]
        ];
    
    
        return view('pages.aging-reminder',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }

      public function occupancyreport(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "All"]
        ];
    
    
        return view('pages.occupancy-report',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }

      public function aginreminderdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "All"]
        ];
    
    
        return view('pages.aging-reminder-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }


    
}
