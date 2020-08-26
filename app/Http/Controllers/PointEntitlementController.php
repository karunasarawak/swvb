<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointEntitlementController extends Controller
{
  // Route::get('/pointentitlement/all','PointEntitlementController@index');
  // Route::get('/pointentitlement/history','PointEntitlementController@history');
    //
    public function index()
    {

      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Point Entitlements"],["name" => "All"]
      ];
  
      return view('pages.point-entitlement-history', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
    }
    
    public function history()
    {

    }
}
