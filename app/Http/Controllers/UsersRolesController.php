<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersRolesController extends Controller
{
    public function ictrequest(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Receipt"],["name" => "All"]
        ];
    
    
    
        return view('pages.ictrequest', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }
    
      public function userroles(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function roledetails(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.roles-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function basicpermissions(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.basic-permissions',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function approvals(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];
    
        return view('pages.approvals-users&roles',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }


}
