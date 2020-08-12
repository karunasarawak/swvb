<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Inventory"],["name" => "All"]
        ];
    
        return view('pages.inventory', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      } 
      
      public function offset(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Inventory"],["name" => "All"]
        ];
    
        return view('pages.offset-reminder', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      } 
}
