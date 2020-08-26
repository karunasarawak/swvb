<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointAndEntitlementManagementController extends Controller
{
    public function index(){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Point & Entitlement Management"],["name" => "All"]
        ];
  
        return view('pages.pt&ent_management-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
    }
}
