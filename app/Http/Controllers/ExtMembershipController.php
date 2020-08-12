<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtMembershipController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Reserve Unit"]
        ];
    
        return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }      

      public function rcibball(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Reserve Unit"]
        ];
    
        return view('pages.RCIIBB', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function newIIRUBatch(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Reserve Unit"]
        ];
    
        return view('pages.IInewbatch-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function IIdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.dbrdetails', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function enrollment(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Enrollment"]
        ];
    
        return view('pages.rciIIenrollment-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function rcinew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "New"]
        ];
    
        return view('pages.rcinewbatch-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function rcibbdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.batch73details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function rcinewenroll(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.rci-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function IInewenroll(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.ii-newenrollment', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  
}
