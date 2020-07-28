<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgingReminderController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "All"]
        ];
    
      
    
        // if (empty($request->all()))
        //   {
        //       $data=Membership::paginate(2);
    
        //   }
        //   else
        //   {
        //       $data =DB::table('membership')->Where('')
        //   }
    
        //$leadslist = Leads::all();
    
        
        //$membership = Membership::join('leads', 'leads.lead_id', '=', 'membership.mbrship_id')->select('membership.*')->get();
    
        //$membership = DB::table('')->select('membership.*')->get();
        //$membership = DB::select('select * from membership');
    
        // =['membership'=>$membership, 'membership'=>];
    
        // $payload = ['membership' => $membership, 'leads' => $leadslist];
    
        return view('pages.agingreminder',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        //'payload'=>$payload]
      }
    
}
