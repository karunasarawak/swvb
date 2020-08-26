<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use DB;
use App\EventLog;

class EventLogsController extends Controller
{
  public function index()
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Event Logs"],["name" => "All Logs"]
    ];

    $eventLogs = DB::table('event_logs')
                ->join('memberships AS m','m.mbrship_id','event_logs.mbrship_id')
                ->leftJoin('leads','leads.lead_id','m.lead_id1')
                ->join('event_logs_type AS t','t.el_type_id','event_logs.el_type_id')
                ->join('event_logs_category AS c','c.el_cat_id','t.el_cat_id')
                ->join('com_channels','com_channels.com_channel_id','event_logs.com_channel_id')
                ->leftJoin('departments','departments.dept_id','event_logs.el_assign_to')
                ->leftJoin('staffs','staffs.staff_id','event_logs.el_assign_to')
                ->get();

    $mbr = DB::table('memberships')->get();
    $branch = DB::table('branches')->get();
    $el_type = DB::table('event_logs_type')->get();
    $el_cat = DB::table('event_logs_category')->get();
    $com_channel = DB::table('com_channels')->get();
    $department = DB::table('departments')->get();
    $staff = DB::table('staffs')->get();


    $payload = ['mbr'=>$mbr,'branch'=>$branch, 'el_type'=>$el_type, 'el_cat'=>$el_cat, 
                'com_channel'=>$com_channel, 'department'=>$department, 'staff'=>$staff];
    
    return view('pages.eventlogs-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'eventLogs'=>$eventLogs, 'payload'=>$payload]);
  }

  public function eventDetails($event_id)
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Event Logs"],["name" => "Event Logs Details"]
    ];

    $eventDetail = DB::table('event_logs')->where('event_logs.el_id',$event_id)
                ->join('memberships AS m','m.mbrship_id','event_logs.mbrship_id')
                ->join('leads','leads.lead_id','event_logs.lead_id')
                ->join('salutations','salutations.salutation_id','leads.salutation_id')
                ->join('event_logs_type AS t','t.el_type_id','event_logs.el_type_id')
                ->join('event_logs_category AS c','c.el_cat_id','t.el_cat_id')
                ->join('com_channels','com_channels.com_channel_id','event_logs.com_channel_id')
                ->join('packages','packages.package_id','m.package_id')
                ->join('invoices','invoices.mbrship_id','m.mbrship_id')
                ->leftJoin('departments','departments.dept_id','event_logs.el_assign_to')
                ->leftJoin('staffs','staffs.staff_id','event_logs.el_assign_to')
                ->get();

    $comLog = DB::table('call_logs')->where('el_id',$event_id)
              ->join('com_channels','com_channels.com_channel_id','call_logs.com_channel_id')
              ->get();

    $com_channel = DB::table('com_channels')->get();

    return view('pages.eventlogs-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 
                'eventDetail'=>$eventDetail[0], 'comLog'=>$comLog]);
  }

  public function eventUpdate(Request $request)
  {
    // dd($event_id);
    EventLog::where('el_id',$request->event_id)->update([
      'el_resolve_at'=>$request->date_resolve,
      'el_status'=>$request->status
    ]);

    return redirect('/eventlogs');
    
  }

  public function eventCreate(Request $request)
  {
    $currentDate = date('Y-m-d');

    if($request->assign == 1)
    {
        $assign = $request->assign_indiv;
    }
    else if($request->assign == 2)
    {
        $assign = $request->assign_dept;
    }    EventLog::insert([
      'mbrship_id'=>$request->mbrship_id,
      'lead_id'=>null,
      'el_type_id'=>$request->el_type,
      'el_cat_id'=>$request->el_cat,
      'el_title'=>$request->title,
      'el_remarks'=>$request->remarks,
      'el_created_by'=>null,
      'el_created_at'=>$currentDate,
      'el_updated_by'=>null,
      'el_updated_at'=>$currentDate,
      'el_assign_to'=>$assign,
      'el_assign_at'=>$currentDate,
      'el_to_resolve_at'=>$request->date_to_resolve,
      'el_resolve_at'=>null,
      'reservation_type'=>$request->reservation_type,
      'com_channel_id'=>$request->com_channel
    ]);

    return redirect('/eventlogs');
  }

  public function upload(Request $request, $event_id)
  {
    $destination_path = storage_path('uploads');
    // dd($request);
    $file_count = 3;
    
    for($i = 1; $i <= $file_count; $i++)
    {
      $file = "file".$i;
      if($request->has($file))
      {
        $uploaded_file = $request->$file;

        $extension = $uploaded_file->getClientOriginalExtension();
        $name = $uploaded_file->getClientOriginalName();
        $fileName = date('Y-m-d').'_'.$name;

        $uploaded_file->move(public_path('uploads'), $fileName);

        DB::table('attachments')->insert([
          'attachment_type_id'=>1,
          'parent_id'=>$request->call_id,
          'doc_title'=>$request->title,
          'doc_created_by'=>null,
          'doc_directory'=>$fileName,
        ]);

      }
    }

    redirect("/eventlogs/".$request->call_id."/details");
  }

  public function download($filename)
  {
    // dd($filename);
    $file_path = storage_path('uploads') . "/" . $filename;
    return Response::download($file_path);
  }

  public static function showAttachments($call_id)
  {
    $attachment  = DB::table('attachments')
                  // ->join('call_logs','call_logs.l_id',$call_id)
                  ->where([
                        ['attachments.attachment_type_id', '1'],
                        ['attachments.parent_id', $call_id]
                    ])
                  ->get();

    return $attachment;
  }
    
}