<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtMembershipController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "All"]
        ];
    
        return view('pages.extmembership-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
        // return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }

    public function enrolldetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "Details"]
        ];
    
        return view('pages.enrollment-batch-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
        // return view('pages.extmembership-reserveunitdbr', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      } 

      public function iiruall(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU"]
        ];
    
        return view('pages.iiru-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      } 

      public function rcibball(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "RCI::BB"]
        ];
    
        return view('pages.rcibb-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function iirunew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU New"]
        ];
    
        return view('pages.iiru-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function rcibbnew(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "RCI BB New"]
        ];
    
        return view('pages.rcibb-new', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function iirudetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => "IIRU Details"]
        ];
    
        return view('pages.iiru-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  


      public function rcibbdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Ext Membership"],["name" => " RCI:BB Details"]
        ];
    
        return view('pages.rcibb-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  
}
