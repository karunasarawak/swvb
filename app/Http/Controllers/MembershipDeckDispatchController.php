<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipDeckDispatchController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership Deck Dispatch"],["name" => "Member"]
        ];
    
        return view('pages.membershipdeckdispatch-wlcletter', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function showsupplier(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership Deck Dispatch"],["name" => "Supplier"]
        ];
    
        return view('pages.membershipdeckdispatch-supplier', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function supplierdetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership Deck Dispatch"],["name" => "Supplier"]
        ];
    
        return view('pages.supplier-details', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }
}
