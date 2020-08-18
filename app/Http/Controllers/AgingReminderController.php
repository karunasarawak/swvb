<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgingReminderController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Aging Reminder"],["name" => "All"]
        ];
    
    
        return view('pages.aging-reminder',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }

      public function occupancyreport(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Occupancy Report"],["name" => "All"]
        ];
    
    
        return view('pages.occupancy-report',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }

      public function aginreminderdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Aging Reminder"],["name" => "Details"]
        ];
    
    
        return view('pages.aging-reminder-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }

      public function tourismtax(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Tourism Tax"],["name" => "All"]
        ];
    
    
        return view('pages.tourism-tax',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }


    
}
