<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Installment Schedule"],["name" => "All"]
        ];
    
        return view('pages.installmentschedule-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function newRefund(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "New Installment Schedule"]
        ];
    
        return view('pages.installmentschedule-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      
      public function details(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Details"]
        ];
    
    
        return view('pages.installmentschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      public function calculator(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Calculator"]
        ];
    
    
        return view('pages.installmentschedule-calculator',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      public function amfdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "AMF Schedule Detail"]
        ];
    
    
        return view('pages.amfschedule-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      public function amfall(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "AMF Schedule"],["name" => "All"]
        ];
    
    
        return view('pages.installment-amfall',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

}
