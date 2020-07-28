<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventLogsController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Event Logs"],["name" => "All Logs"]
        ];
    
        return view('pages.eventlogs-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

      public function details(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Event Logs"],["name" => "Event Logs Details"]
        ];
    
    
        return view('pages.eventlogs-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
    
}
