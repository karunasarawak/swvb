<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use App\Dispatch;

class DispatchController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Dispatch"],["name" => "All"]
        ];

        $dispatch = DB::table('dispatch')->orderBy('dispatcH_id','asc')->get();

        return view('pages.dispatch', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'dispatch'=>$dispatch]);
    }

  public function uploadCSV(Request $request)
  {
    
    if ($request->input('submit') != null )
    {
      // dd($request);
      $file = $request->file('file');
      // dd($file);

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      if(in_array(strtolower($extension),$valid_extension))
      {
        if($fileSize <= $maxFileSize)
        {
          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) 
          {
            $num = count($filedata);
            
            // Skip first row (Remove below comment if you want to skip the first row)
            if($i == 0)
            {
                $i++;
                continue; 
            }

            for ($c = 0; $c < $num; $c++) 
            {
                $importData_arr[$i][] = $filedata [$c];
            }
            $i++;
          }

          fclose($file);
          // dd($importData_arr);
          foreach($importData_arr as $importData)
          {

            $data = array(
              "consignment_note" =>$importData[0],
              "mode" => $importData[1],
              "dispatch_item" => $importData[2],
              "dispatch_date" => $importData[3],
              "item_status" => $importData[4],
              "remarks" => $importData[5],
              );
            // dd($data);
            $upload = Dispatch::upload($data);

          }

        }
      }

    }
    else
    {
      dd("Failed");
    }

    return redirect('/dispatch');

  }

  public function downloadSample($filename, $dispatch_id)
  {
     // dd($filename);
     $file_path = public_path('uploads') . "/dispatch_sample.csv" ;
     return Response::download($file_path);
  }

  public function uploadAttachments(Request $request, $event_id)
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

        $remarks = "remark".$i;

        //Attachment type = 8
        DB::table('attachments')->insert([
          'attachment_type_id'=>8,
          'parent_id'=>$request->dispatch_id,
          'doc_title'=>$request->title,
          'doc_created_by'=>null,
          'doc_directory'=>$fileName,
          'remarks'=>$request->$remarks
        ]);
      }
    }

    return redirect("/dispatch");
  }

  public function downloadAttachments($filename)
  {
    // dd($filename);
    $file_path = public_path('uploads') . "/" . $filename;
    return Response::download($file_path);
  }

  public function deleteDispatch($dispatch_id, $dispatch_no)
  {
    DB::table('dispatch')->where('dispatch_id', $dispatch_id)->delete();

    return redirect('/dispatch');
  }

  public static function showAttachments($dispatch_id)
  {

    $attachment  = DB::table('attachments')
                  ->where([
                        ['attachments.attachment_type_id', '8'],
                        ['attachments.parent_id', $dispatch_id]
                    ])
                  ->get();

    return $attachment;
  }
}
