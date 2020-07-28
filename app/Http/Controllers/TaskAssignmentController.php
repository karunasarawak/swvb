<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskAssignmentController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Task Assignment"],["name" => "All"]
        ];
    
        return view('pages.taskassign', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs,]);
      }

      public function uploadcsv(Request $request)
      {
        // echo "something";
        // dd($request->file('csvfile'));
        Excel::import(new LeadsImport, $request->file('csvfile'));
        // return redirect('leads');
      }
}
