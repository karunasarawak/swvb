<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\TaskAssign;

class TaskAssignmentController extends Controller
{
    public function index()
    {

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Task Assignment"],["name" => "All"]
        ];

        $taskassign = DB::table('memberships')
        ->join('leads','leads.lead_id', 'memberships.lead_id1')
        ->join('staff AS a','a.staff_id', 'memberships.mro')
        ->join('staff AS b','b.staff_id', 'memberships.cco')
        ->orderBy('mbrship_no')
        ->select('a.staff_name AS MRO', 'b.staff_name AS CCO', 'memberships.mbrship_no', 'leads.name', 'memberships.mbrship_status')
        ->get();
    
        return view('pages.taskassign', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'taskassign'=>$taskassign]);
      }

      public function uploadCSV(Request $request)
      {
       
        if ($request->input('submit') != null )
        {
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

          // Check file extension
          if(in_array(strtolower($extension),$valid_extension))
          {
            // Check file size
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
             
             // Update Data
             foreach($importData_arr as $importData)
             {
                $update = array(
                  "mbrship_no" =>$importData[0],
                  "cco" => $importData[1],
                  "mro" => $importData[2]
                 );

                TaskAssign::updateData($update);
              }
            }
          }
        }

        // dd($request->file);
        return redirect('taskassign');
      }
}