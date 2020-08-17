<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchPaymentController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.batch-payment', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function details(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.batch-paymentdetails', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function new(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.batch-paymentnew', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  
}
