<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Membership;
use App\Leads;
use App\Country;
use Illuminate\Database\Seeder;

class MembershipController extends Controller
{

  public function index(){

    $pageConfigs = ['pageHeader' => true];
    
    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "All"]
    ];

    $membership = Membership::all();

    return view('pages.membership-show',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'membership'=>$membership]);

  }

  public function archive(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Archived"]
    ];

    return view('pages.membership-archive',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

    // input forms
  public function createMembership($lead_id, $tour_id)
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Create membership"]
    ];
    
    $salute = DB::table('salutations')->get();
    $gender = DB::table('gender')->get();
    $maritual  = DB::table('maritial_status')->get();
    $religion = DB::table('religions')->get();
    $race = DB::table('race')->get();
    $nation = DB::table('nationalities')->get();
    $city = DB::table('cities')->get();
    $state = DB::table('states')->get();
    $country = DB::table('countries')->get();
    $packages = DB::table('packages')->get();

    $sm = DB::table('sales_teams')->where('sales_role_id',3)->get();
    $sp = DB::table('sales_teams')->where('sales_role_id',2)->get();
    $venue = DB::table('sales_venues')->where('venue_status',1)->get();

    // dd($lead);
    $lead = DB::table('leads')
          ->where('lead_id',$lead_id)
          ->get();
          // dd($lead);

    $tour = DB::table('tours')
          ->where('tour_id',$tour_id)
          ->get();

    $lead_id2 = DB::table('tours')
          ->where('tour_id',$tour_id)
          ->pluck('tours.lead_id2');

    if($lead_id2[0] == null)
    {
        $lead2[0] = null;
    }
    else
    {
      $lead2 = DB::table('leads')->where('lead_id', $lead_id2)->get();
    }
    
    // dd($lead2[0]);

    $payload = [
              'lead'=>$lead[0],
              'lead2'=>$lead2[0],
              'tour'=>$tour[0], 
              'salute'=>$salute,
              'gender'=>$gender,
              'maritual'=>$maritual,
              'religion'=>$religion,
              'race'=>$race,
              'nation'=>$nation,
              'city'=>$city,
              'state'=>$state,
              'country'=>$country,
              'packages'=>$packages,
              'sp'=>$sp,
              'sm'=>$sm,
              'venue'=>$venue
            ];

    // dd($payload);

      return view('pages.membership-create',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);  
    }

  public function storeMembers(Request $request)
  {
    // dd($request);
    $company_id = null;
    $second_lead_id = null;
    $amf_cc_id = null;
    $inst_cc_id = null;
    $install_auto = null;
    $amf_auto = null;

    $lead_id = $request->lead_id;
    $lead_id2 = $request->lead_id2;
    $tour_id = $request->tour_id;
    
    //PM - Primary Addresses
    $addr = DB::table('addresses')->insert([]);

    //PM - Alternative Addresses

    //SM = Primary Addresses

    //SM - Alternative Addresses

    //Primary Addresses
    $addr = DB::table('addresses')->insert([
        'leads_id'=>$request->lead_id, 'addr_1'=>$request->pri_addr1, 'addr_2'=>$request->pri_addr2,
        'postcode'=>$request->pri_code, 'city_id'=>$request->pri_city, 'state_id'=>$request->pri_state, 'country_id'=>$request->pri_country, 
        'is_primary'=>1
    ]);

    $pri_addr_id = DB::getPDO()->lastInsertId();

    //Alternate Addresses
    $addr2 = DB::table('addresses')->insert([
        'leads_id'=>$request->lead_id,
        'addr_1'=>$request->alt_addr1,
        'addr_2'=>$request->alt_addr2,
        'postcode'=>$request->alt_code,
        'city_id'=>$request->alt_city,
        'state_id'=>$request->alt_state,
        'country_id'=>$request->alt_country,
        'is_primary'=>0
    ]);

    $alt_addr_id = DB::getPDO()->lastInsertId();

    //Coporate Info
    if($request->contract_type == 1)
    {
      $company = DB::table('member_companies')->insert([
          'nob'=>$request->company_nob,
          'comp_name'=>$request->company_name,
          'comp_no'=>$request->company_no,
          'comp_addr1'=>$request->company_addr1,
          'comp_addr2'=>$request->company_addr2,
          'comp_pcode'=>$request->company_pcode,
          'comp_city'=>$request->company_city,
          'comp_state'=>$request->company_state,
          'comp_country'=>$request->company_country,
          'comp_email'=>$request->company_email,
          'comp_contact'=>$request->company_contact,
          'comp_fax'=>$request->company_fax
      ]);

      $company_id = DB::getPDO()->lastInsertId();
    }

     //Installment Schedule
    $install = DB::table('installment_schedule')->insert([
        'mbrship_id'=>0,
        'duration'=>$request->duration,
        'price'=>$request->price,
        'addition'=>$request->add,
        'discount'=>$request->dis,
        'net_price'=>$request->npt,
        'downpayment'=>$request->dpp,
        'admin_charges'=>$request->charges,
        'outstanding'=>$request->osd
    ]);

    $install_id = DB::getPDO()->lastInsertId();

    //AMF Credit Card
    if($request->amfcc == 1)
    {
        $amf_cc = DB::table('credit_cards')->insert([
          'cc_no'=>$request->amf_cc_no,
          'cc_name'=>$request->amf_cc_name,
          'cc_exp_date'=>$request->amf_cc_exp,
          'cc_cvv'=>$request->amf_cc_ccv,
        ]);

        $amf_cc_id = DB::getPDO()->lastInsertId();
        $amf_auto = 1;
    }

    //Installment Credit Card
    if($request->instcc == 1)
    {
        $inst_cc = DB::table('install_schedule')->insert([
          'cc_no'=>$request->install_cc_no,
          'cc_name'=>$request->install_cc_name,
          'cc_exp_date'=>$request->install_cc_exp,
          'cc_cvv'=>$request->install_cc_ccv,
        ]);

        $inst_cc_id = DB::getPDO()->lastInsertId();
        $inst_auto = 1;
    }
   
    if($request->member_type == 1)
    {
        $create1 = DB:: table('memberships')->insert([
          'lead_id'=>$request->lead_id,
          'lang'=>$request->lang1,
          // 'relationship'=>null,
          'mbrship_status'=>$request->status1,
          'pri_addr_id'=>$pri_addr_id, 
          'alt_addr_id'=>$alt_addr_id,
          'remarks'=>$request->remarks,
          'comp_id'=>$request->$company_id,
          'application_no'=>$request->appno,
          'application_date'=>$request->app_date,
          'agreement_no'=>$request->agree_no,
          'agreement_date'=>$request->agree_date,
          'package_id'=>$request->package_id,
          'mbrship_no'=>$request->mbr_no,
          'install_schedule_id'=>$install_id,
          'overpayment'=>$request->opm,
          'cc_id_amf'=>$amf_cc_id,
          'cc_id_install'=>$inst_cc_id,
          'declaration_no'=>$request->declare_no,
          'mro'=>$request->mro,
          'cco'=>$request->cco
        ]);
    }
    else if ($request->member_type ==2)
    {
        $create2 = DB::table('leads')->insert([
          'salutation_id'=>$request->salute2,
          'name'=>$request->name2,
          'gender'=> $request->gender2,
          'nric'=>$request->nric2,
          'dob'=>$request->dob2,
          'marital_status'=>$request->marital1,
          'ethnicity_id' => $request->race2,
          'religion_id'=>$request->religion2,
          'venue_id'=>null,
          'nationality' =>$request->nation2,
          'occupation' =>$request->occupation2,
          'company' =>$request->company2,
          'mobile_no' =>$request->mobile_no2,
          'whatsapp_no' =>$request->whatsapp_no2,
          'home_no'=>$request->home_no2,
          'office_no'=>$request->office_no2,
          'primary_email'=>$request->pemail2,
          'alt_email' =>$request->aemail2
          ]);

        $second_id = DB::getPDO()->lastInsertId();
    }

    //Create Primary Membership 
    

    $mbr_id1 = DB::getPDO()->lastInsertId();

    //Create Secondary Membership 
    //Lead not exist
    if($request->name2 == null && $request->lang2 == null)
    {
      //Create Lead
      
    }
    //Lead exists
    else if ($request->name2 != null && $request->lang2 == null)
    {
      $second_id = $request->lead_id;
    }

    // dd($second_lead_id);

    //Second Primary Address
    $second_addr1 = DB::table('addresses')->insert([
        'leads_id'=>$second_id,
        'addr_1'=>$request->pri2_addr1,
        'addr_2'=>$request->pri2_addr2,
        'postcode'=>$request->pri_code2,
        'city_id'=>$request->pri_city2,
        'state_id'=>$request->pri_state2,
        'country_id'=>$request->pri_country2,
        'is_primary'=>0
    ]);

    $second_pri_addr_id = DB::getPDO()->lastInsertId();

    //Second Alternative Address
    $second_addr2 = DB::table('addresses')->insert([
        'leads_id'=>$second_lead_id,
        'addr_1'=>$request->alt2_addr1,
        'addr_2'=>$request->alt2_addr2,
        'postcode'=>$request->alt_code2,
        'city_id'=>$request->alt_city2,
        'state_id'=>$request->alt_state2,
        'country_id'=>$request->alt_country2,
        'is_primary'=>0
    ]);

    $second_alt_addr_id = DB::getPDO()->lastInsertId();
    
    $create2 = DB:: table('memberships')->insert([
        'lead_id'=>null,
        'lang'=>$request->lang2,
        // 'relationship'=>$request->relation2,
        'mbrship_status'=>$request->status2,
        'pri_addr_id'=>$request->$second_pri_addr_id,
        'alt_addr_id'=>$request->$second_alt_addr_id,
        'remarks'=>$request->remarks,
        'comp_id'=>$request->$company_id,
        'application_no'=>$request->appno,
        'application_date'=>$request->app_date,
        'agreement_no'=>$request->agree_no,
        'agreement_date'=>$request->agree_date,
        'package_id'=>$request->package_id,
        'mbrship_no'=>$request->mbr_no,
        'install_schedule_id'=>$install_id,
        'overpayment'=>$request->opm,
        'cc_id_amf'=>$amf_cc_id,
        'cc_id_install'=>$inst_cc_id,
        'declaration_no'=>$request->declare_no,
        'mro'=>$request->mro,
        'cco'=>$request->cco
    ]);

    $mbr_id2 = DB::getPDO()->lastInsertId();

    //Update installment mbr_id
    $a = DB::table('installment_schedule')
        ->where('install_schedule_id', $install_id)
        ->update(['mbrship_id'=>$mbr_id]);
        
    //dd($request->all());
     return redirect('membership/'.$request->tour_id.'/details');
  }

  public function showMembers(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Leads"],["name" => "Membership Details"]
    ];

    return view('pages.membership-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function redirect(Request $request)
  {

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Leads"],["name" => "Membership Details"]
    ];

    if($request -> Deceased == 'Transfer')
    {
      return view('pages.membership-transfer');
    }
    else if ($request -> Deceased == 'Downgrade')
    {
      return view('pages.membership-updowngrade');
    }
    else if ($request -> Deceased == 'Repurchase')
    {
      return view('pages.membership-repurchase');
    }
    

    return view('pages.membership-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

 public function withdrawMembership(){

  $pageConfigs = ['pageHeader' => true];

  $breadcrumbs = [
    ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Withdraw Membership"]
  ];

  return view('pages.membership-withdraw',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

 public function transfer(){

  $pageConfigs = ['pageHeader' => true];

  $breadcrumbs = [
    ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Membership"],["name" => "Membership Transfer"]
  ];

  return view('pages.membership-transfer',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

public function updowngrade(){

  $pageConfigs = ['pageHeader' => true];

  $breadcrumbs = [
    ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Membership"],["name" => "Membership Up/Downgrade"]
  ];

  return view('pages.membership-updowngrade',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
}

public function repurchase(){

  $pageConfigs = ['pageHeader' => true];

  $breadcrumbs = [
    ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Membership"],["name" => "Membership Up/Downgrade"]
  ];

  return view('pages.membership-repurchase',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
}

  public function editMembers(Request $request, $id){

    Membership::where('members_id', $id)->update([
      'contract1' =>$request->contract1,
      'companyname' =>$request->companyname,
      'nob' =>$request->nob,
      'companyno' =>$request->companyno,
      'addressl1' =>$request->addressl1,
      'postcode' =>$request->postcode,
      'city' =>$request->city,
      'state' =>$request->state,
      'country' =>$request->country,
      'email' =>$request->email,
      'contactno' =>$request->contactno,
      'faxno' =>$request->faxno,
      'appno' =>$request->appno,
      'appdate' =>$request->appdate,
      'agreeno' =>$request->agreeno,
      'agdate' =>$request->agdate,
      'membershipno' =>$request->membershipno,
      'membershipterm' =>$request->membershipterm,
      'mc' =>$request->mc,
      'me' =>$request->me,
      'ptype' =>$request->ptype,
      'e1' =>$request->e1,
      'eb' =>$request->eb,
      'status1' =>$request->status1,
      'id1' =>$request->id1,
      'pp1' =>$request->pp1,
      'a1' =>$request->a1,
      'd1' =>$request->d1,
      'npt' =>$request->npt,
      'dpp' =>$request->dpp,
      'ac' =>$request->ac,
      'to1' =>$request->to1,
      'to2' =>$request->to2,
      'ac1' =>$request->ac1,
      'totaloutstanding' =>$request->totaloutstanding,
      'totaloverpayment' =>$request->totaloverpayment,
      'pt1' =>$request->pt1,
      'npdate' =>$request->npdate,
      'aa1' =>$request->aa1,
      'oa1' =>$request->oa1,
      'pt2' =>$request->pt2,
      'npd2' =>$request->npd2,
      'aa2' =>$request->aa2,
      'p1' =>$request->p1,
      'oa2' =>$request->oa2,
      'dno' =>$request->dno,
      'mro' =>$request->mro,
      'cco' =>$request->cco,
      'sp1' =>$request->sp1,
      'sm1' =>$request->sm1,
      'sv1' =>$request->sv1,
    ]);

    return redirect('members/'.$request->lead_id.'/'.$request->tour_id.'/details');
  }

  public function pthistory(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Point History"]
    ];

    return view('pages.pt-history',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function entitlementm(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Manage Entitlement"]
    ];

    return view('pages.entitlementmanagement',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function entitlementh(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Entitlement History"]
    ];

    return view('pages.ent-history',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function advanceent(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Manage Entitlement"]
    ];

    return view('pages.entitlementmanagement-advanced',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }

  public function offset(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Membership"],["name" => "Manage Entitlement"]
    ];

    return view('pages.entitlementmanagement-offset',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
