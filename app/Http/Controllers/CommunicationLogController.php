<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationLogController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Communication Log"],["name" => "All"]
        ];
    
        return view('pages.communicationlog', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function newLog(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Communication Log"],["name" => "New Communication Log"]
        ];
    
        return view('pages.newcommunicationlog', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

}
