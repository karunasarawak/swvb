<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Leads;
use App\Tours;
use App\Salutation;
use App\Staffs;
use App\EventLogs;
use App\EventLogsCategory;
use App\EventLogsType;
use App\CallLogs;
use App\Address;
use Carbon\Carbon;
use App\Imports\LeadsImport;
use Maatwebsite\Excel\Facades\Excel;

class LeadsController extends Controller
{
  public function index(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Leads"],["name" => "All"]
    ];

    $leads = DB::table('leads')
            ->join('salutations','salutations.salutation_id','leads.salutation_id')
            ->join('sales_teams','sales_teams.sales_team_id','leads.telemarketer_id')
            ->where('leads.status','!=',3)
            ->select('leads.lead_id','leads.created_at','leads.name','salutations.salutation','sales_teams.sales_name')
            ->orderBy('leads.lead_id')
            ->get();
    $payload = ['leads'=>$leads];

    return view('pages.leads-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function newLead()
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads/all", "name" => "Leads"],["name" => "New Lead"]
    ];

    $salut = Salutation::all();

    $telem = DB::table('sales_teams')->where('sales_role_id',1)->get();

    $payload = ['salutations'=>$salut, 'telemarketers'=>$telem];

    return view('pages.leads-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function storeLead(Request $request){   
      // dd($request);

    Leads::create($request->all());

    return redirect('leads/all');
  }

  public function createEvent(Request $request, $lead_id)
  {
    $current = date('Y-m-d H:i:s');

    DB::table('event_logs')->insert([
        'el_type_id'=>$request->type,
        'el_cat_id'=>$request->cat,
        'lead_id'=>$request->leadid,
        'customer_type'=>1,
        'title'=>$request->title,
        'last_updated_by'=>"N/A",
        'created_by'=>"N/A",
        'created_at'=> $current,
        'updated_at'=> $current
      ]);

    return redirect('leads/'.$lead_id.'/details');
  }

  public function editLead(Request $request, $id)
  {

    Leads::where('lead_id', $id)->update([
      'salutation_id' =>$request->salutation,
      'name' =>$request->name,
      'mobile_no' =>$request->mobile_no,
      'whatsapp_no' =>$request->whatsapp_no,
      'credit_card_limit' =>$request->credit_card_limit,
      'telemarketer_id' =>$request->telemarketer_id,
      'whatsapp_no' =>$request->whatsapp_no,
      'credit_card_limit' =>$request->credit_card_limit,
      'telemarketer_id' =>$request->telemarketer_id
    ]);

    return redirect('leads/'.$id.'/details');
  }

  public function viewLead($lead_id)
  {

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads/all", "name" => "Leads"],["name" => "View Lead Details"]
    ];

    $details = DB::table('leads')
              ->join('salutations','salutations.salutation_id','leads.salutation_id')
              ->join('sales_teams','sales_team_id','leads.telemarketer_id')
              ->where('lead_id', $lead_id)
              ->select('salutations.salutation','salutations.salutation_id','leads.lead_id','leads.name','leads.telemarketer_id',
              'leads.mobile_no','leads.whatsapp_no','leads.credit_card_limit','leads.status','sales_teams.sales_name')
              ->get();

    $salutations = DB::table('salutations')->get();

    $telemarketer = DB::table('sales_teams')->where('sales_role_id',1)->get();

    $event_type = DB::table('event_logs_type')->get();
    $event_cat = DB::table('event_logs_category')->get();

    $event_logs = DB::table('event_logs')
                  ->join('leads','leads.lead_id','event_logs.lead_id')
                  ->join('event_logs_type','event_logs_type.el_type_id','event_logs.el_type_id')
                  ->join('event_logs_category','event_logs_category.el_cat_id','event_logs.el_cat_id')
                  ->select('event_logs.el_id','leads.lead_id','leads.name','event_logs_type.el_type_name','event_logs_category.el_cat_name',
                          'event_logs.title','event_logs.last_updated_by','event_logs.created_by', 'event_logs.created_at','event_logs.updated_at')
                  ->get();

    $events = EventLogs::with('eventLogsCategory', 'eventLogsType')->where('lead_id', $lead_id)->get();

    $payload = ['details'=>$details[0], 'salutations'=>$salutations, 'telemarketer'=>$telemarketer, 'events'=>$events];
    $event = ['event_type'=>$event_type, 'event_cat'=>$event_cat, 'event_logs'=>$event_logs];

    return view('pages.leads-details',
                ['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload, 'event'=>$event]
              );
  }

  public function addCall(Request $request)
  {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads/all", "name" => "Leads"],["name" => "View Lead Details"]
      ];

      $current = date('Y-m-d H:i:s');

      DB::table('call_logs')->insert([
        'el_id'=>$request->event_id,
        'lead_id'=>$request->lead_id,
        'init_date'=>$request->date,
        'init_time'=>$request->time,
        'com_channel'=>1,
        'created_at'=>$current,
        'updated_at'=>$current
      ]);

      return redirect('leads/'. $request->lead_id . "/details");
  }

  public function updateCall(Request $request)
  {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/leads/all", "name" => "Leads"],["name" => "View Lead Details"]
      ];

      $current = date('Y-m-d H:i:s');
      $call_id = $request->call_id2;

      $s = Carbon::parse($request->start);
      $e = Carbon::parse($request->end);
      $diff = $e->diffInMinutes($s);

      CallLogs::where('cl_id',$request->call_id2)->update([
        'call_length'=>$diff,
        'start_time'=>$request->start,
        'end_time'=>$request->end,
        'outcome'=>$request->outcome,
        'reason'=>$request->reason,
        'remarks'=>$request->remarks,
        'com_channel'=>1,
        'updated_at'=>$current
      ]);
      
      

      return redirect('leads/'. $request->lead_id2 . "/details");
  }


  public function uploadCSV(Request $request)
  {
    // echo "something";
    // dd($request->file('csvfile'));
    Excel::import(new LeadsImport, $request->file('csvfile'));
    // return redirect('leads');
  }

  public function archiveLeads($lead_id)
  {
    Leads::where('lead_id', $lead_id)->update(['status'=>3]);

    return redirect('leads/all');
  }

  public function showArchive()
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads/all", "name" => "Leads"],["name" => "Archive"]
    ];

    $leads = DB::table('leads')
        ->join('salutations','salutations.salutation_id','leads.salutation_id')
        ->join('sales_teams','sales_teams.sales_team_id','leads.telemarketer_id')
        ->where('leads.status','=',3)
        ->select('leads.lead_id','leads.created_at','leads.name','salutations.salutation','sales_teams.sales_name')
        ->orderBy('leads.lead_id')
        ->get();

    $payload = ['leads'=>$leads];

    return view('pages.leads-archive',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

 
}
