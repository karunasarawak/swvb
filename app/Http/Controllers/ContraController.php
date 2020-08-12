<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContraController extends Controller
{

    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.contra-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  


    public function new(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.contra-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function details(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.contra-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

}
