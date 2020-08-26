<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DispatchController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Dispatch"],["name" => "All"]
        ];

        $dispatch = DB::table('dispatch')
                ->join('event_logs','event_logs.el_id','dispatch.el_id')
                ->join('event_logs_category','event_logs_category.el_cat_id','dispatch.el_cat_id')
                ->join('event_logs_type','event_logs_type.el_type_id','dispatch.el_type_id')
                ->get();

        // dd($dispatch);
        return view('pages.dispatch', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'dispatch'=>$dispatch]);
    }

    public function uploadCSV(Request $request)
    {

      if ($request->input('submit') != null )
      {
        $file = $request->file('file');

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
            foreach($importData_arr as $importData)
            {
              // $data = array(
              //   "salute" =>$importData[0],
              //   "name" => $importData[1],
              //   "mobile" => $importData[2],
              //   "whatsapp" => $importData[3],
              //   "credit_card" => $importData[4],
              //   "telem" => $importData[5],
              //   );

              // $insert = Lead::insertLeads($data);
              
            }

          }
        }
      }

      return redirect('/dispatch');

    }
}
