<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IctRequestController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ict Request"],["name" => "All"]
        ];
    
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  
}
