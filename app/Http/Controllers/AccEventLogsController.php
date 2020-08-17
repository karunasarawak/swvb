<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccEventLogsController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Account Event logs"],["name" => "All"]
        ];
    
        return view('pages.acceventlogs-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        
      }
}
