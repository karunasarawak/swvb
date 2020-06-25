<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Leads;

use App\Salutations;

class LeadsController extends Controller
{
     // input forms
  public function index(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Leads"],["name" => "All"]
    ];

    $leads = Leads::all();

    $sallist = Salutations::all();

    foreach($sallist as $row)
    {
      $salutations[$row['salutation_id']] = $row;
    }

    $payload = ['leads'=>$leads, 'salutations'=>$salutations];

    // dd($leads);

    return view('pages.leads-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function newLead(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Leads"],["name" => "New Lead"]
    ];

    return view('pages.leads-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function storeLead(Request $request){

    Leads::create($request->all());

    return redirect('leads');
  }

  public function editLead(Request $request, $id){

    Leads::where('lead_id', $id)->update([
      'salutation_id' =>$request->salutation_id,
      'name' =>$request->name,
      'mobile_no' =>$request->mobile_no,
      'whatsapp_no' =>$request->whatsapp_no,
      'credit_card_limit' =>$request->credit_card_limit,
      'telemarketer_id' =>$request->telemarketer_id
    ]);

    return redirect('leads/'.$id.'/details');
  }

  public function viewLead($id){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Leads"],["name" => "View Lead Details"]
    ];

    $lead = Leads::where('lead_id', $id)->get();

    $payload = ['lead'=>$lead[0]];

    // dd($payload);

    return view('pages.leads-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function archive(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Leads"],["name" => "Leads Archive"]
    ];

    return view('pages.leads-archive',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  // Input Group forms
  public function inputGroupForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Forms"],["name" => "Input Groups"]
    ];
    return view('pages.form-input-groups',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  // Input number forms
  public function numberInputForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Number Input"]
    ];
    return view('pages.form-number-input',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //select forms
  public function selectForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Select"]
    ];
    return view('pages.form-select',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //Radio forms
   public function radioForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Radio"]
    ];
    return view('pages.form-radio',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //checkbox forms
   public function checkboxForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Checkbox"]
    ];
    return view('pages.form-checkbox',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //switch forms
   public function switchForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Switch"]
    ];
    return view('pages.form-switch',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //textarea forms
   public function textareaForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Textarea"]
    ];
    return view('pages.form-textarea',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
  //Quill Editor forms
  public function quillEditorForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Quill Editor"]
    ];
    return view('pages.form-quill-editor',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //File Uploader forms
   public function fileUploaderForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "File Uploader"]
    ];
    return view('pages.form-file-uploader',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //date time Picker forms
   public function datePickerForm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Form Elements"],["name" => "Date & Time Picker"]
    ];
    return view('pages.form-date-time-picker',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
   //Form Layout
   public function formLayout(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Forms"],["name" => "Form Layouts"]
    ];

    return view('pages.form-layout',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
    //Form Wizard
    public function formWizard(){

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Forms"],["name" => "Form Wizard"]
      ];

      return view('pages.form-wizard',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    //Form validation
    public function formValidation(){

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Forms"],["name" => "Form Validation"]
      ];

      return view('pages.form-validation',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }
    //Form repeater
    public function formRepeater(){

      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Forms"],["name" => "Form Repeater"]
      ];

      return view('pages.form-repeater',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
