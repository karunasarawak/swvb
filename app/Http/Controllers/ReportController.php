<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Leads;
use App\Membership;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function stampingfee(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Stamping Fee"],["name" => "All"]
        ];
    
        return view('pages.stampingfee', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }  

      public function activitylog(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Report"],["name" => "Activity Log"]
        ];
    
        return view('pages.activitylog',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
      
      public function stampingfeedetails(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Installment Schedule"],["name" => "Installment Schedule Details"]
        ];
    
    
        return view('pages.stampingfee-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function download(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Stamping Fee Listing"],["name" => "Download"]
        ];
        
        // https://appdividend.com/2019/09/13/laravel-6-generate-pdf-from-view-example-tutorial-from-scratch/
        

        return view('pages.stampingfeeprintdownload',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
