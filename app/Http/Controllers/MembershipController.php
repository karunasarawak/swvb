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
    $sec_lead_id = null;
    $amf_cc_id = null;
    $inst_cc_id = null;
    $inst_auto = null;
    $amf_auto = null;

    $lead_id = $request->lead_id;
    $lead_id2 = $request->lead_id2;
    $tour_id = $request->tour_id;

    //Update Primary Member basic information
    // $updateM = DB::table('leads')->where()->update([
    //   'salutation_id'=>$request->sec_salute,
    //   'name'=>$request->sec_name,
    //   'gender'=> $request->sec_gender,
    //   'nric'=>$request->sec_nric,
    //   'dob'=>$request->sec_dob,
    //   'marital_status'=>$request->sec_maritual,
    //   'ethnicity_id' => $request->sec_race,
    //   'religion_id'=>$request->religion2,
    //   'venue_id'=>null,
    //   'nationality' =>$request->sec_nation,
    //   'occupation' =>$request->sec_occup,
    //   'company' =>$request->sec_company,
    //   'mobile_no' =>$request->sec_mobile,
    //   'whatsapp_no' =>$request->sec_whatsapp,
    //   'home_no'=>$request->sec_home,
    //   'office_no'=>$request->sec_office,
    //   'primary_email'=>$request->sec_pemail,
    //   'alt_email' =>$request->sec_aemail,
    //   'prefer' =>$request->sec_lang
    //   ]);

    //PM - Primary Addresses
    $addr1 = DB::table('addresses')->insert([
            'leads_id'=>$lead_id,
            'addr_1'=>$request->pri_addr1,
            'addr_2'=>$request->pri_addr2,
            'postcode'=>$request->pri_code,
            'city_id'=>$request->pri_city,    
            'state_id'=>$request->pri_state,
            'country_id'=>$request->pri_country,
        ]);
    $pri_addr_id1 = DB::getPDO()->lastInsertId();

    //PM - Alternative Addresses
    $addr2 = DB::table('addresses')->insert([
            'leads_id'=>$lead_id,
            'addr_1'=>$request->pri_alt_addr1,
            'addr_2'=>$request->pri_alt_addr2,
            'postcode'=>$request->pri_alt_code,
            'city_id'=>$request->pri_alt_city,    
            'state_id'=>$request->pri_alt_state,
            'country_id'=>$request->pri_alt_country,
        ]);
    $pri_addr_id2 = DB::getPDO()->lastInsertId();

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
          'comp_fax'=>$request->company_fax]);
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
        'outstanding'=>$request->osd]);
    $install_id = DB::getPDO()->lastInsertId();

    //AMF Credit Card
    if($request->amfcc == 1)
    {
        $amf_cc = DB::table('credit_cards')->insert([
          'cc_no'=>$request->amf_cc_no,
          'cc_name'=>$request->amf_cc_name,
          'cc_exp_date'=>$request->amf_cc_exp,
          'cc_cvv'=>$request->amf_cc_ccv]);
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
          'cc_cvv'=>$request->install_cc_ccv]);
        $inst_cc_id = DB::getPDO()->lastInsertId();
        $inst_auto = 1;
    }
   
    //Create Primary Membership
    $create1 = DB:: table('memberships')->insert([
      'lead_id1'=>$lead_id,
      'lead_id2'=>null,
      'lang'=>$request->pri_lang,
      'mbrship_status'=>$request->pri_status,
      'pri_addr_id'=>$pri_addr_id1, 
      'alt_addr_id'=>$pri_addr_id2,
      'remarks'=>$request->pri_remarks,
      'contract_type'=>$request->contract_type,
      'comp_id'=>$company_id,
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
      'cco'=>$request->cco,
      'install_auto'=>$inst_auto,
      'amf_auto'=>$amf_auto
      ]);
      
    $mbr_id = DB::getPDO()->lastInsertId();

    //Update lead is_pri_mbr
    $updatePri = DB::table('leads')->where('lead_id', $lead_id)
              ->update(['is_pri_mbr'=>1,'is_sec_mbr'=>0]);

    //Create Secondary Member
    //If Existing Lead
    if($request->exist_lead != null)
    {
        $sec_lead_id = DB::table('leads')->where('lead_id', $request->exist_lead)->pluck('lead_id');
        //Update Existing Lead Basic Information
    }
    //If New Lead
    else if($request->lead_status == 2)
    {
        $telem = DB::table('leads')->where('lead_id',$lead_id)->pluck('telemarketer_id');
        $venue = DB::table('leads')->where('lead_id', $lead_id)->pluck('venue_id');

        $create2 = DB::table('leads')->insert([
          'salutation_id'=>$request->sec_salute,
          'name'=>$request->sec_name,
          'gender'=> $request->sec_gender,
          'nric'=>$request->sec_nric,
          'dob'=>$request->sec_dob,
          'marital_status'=>$request->sec_maritual,
          'ethnicity_id' => $request->sec_race,
          'religion_id'=>$request->religion2,
          'telemarketer_id'=>$telem[0],
          'venue_id'=>$venue[0],
          'nationality' =>$request->sec_nation,
          'occupation' =>$request->sec_occup,
          'company' =>$request->sec_company,
          'mobile_no' =>$request->sec_mobile,
          'whatsapp_no' =>$request->sec_whatsapp,
          'home_no'=>$request->sec_home,
          'office_no'=>$request->sec_office,
          'is_pri_mbr'=>0,
          'is_sec_mbr'=>1,
          'relationship_to_pri_mbr'=>$request->sec_relation,
          'primary_email'=>$request->sec_pemail,
          'alt_email' =>$request->sec_aemail,
          'prefer_lang' =>$request->sec_lang,
          'status'=>1
          ]);

        $sec_lead_id = DB::getPDO()->lastInsertId();
    }
    // dd($sec_lead_id);
    //Update Membership second lead id
    // print("Second Lead ID: ".$sec_lead_id." Membership ID: ".$mbr_id);
    // $updatelead2= DB::table('memberships')->where('mbrship_id', $mbr_id)
    //             ->update(['lead_id2', $sec_lead_id]);

    //Second Primary Address
    $saddr1 = DB::table('addresses')->insert([
        'leads_id'=>$sec_lead_id,
        'addr_1'=>$request->sec_addr1,
        'addr_2'=>$request->sec_addr2,
        'postcode'=>$request->sec_code,
        'city_id'=>$request->sec_city,
        'state_id'=>$request->sec_state,
        'country_id'=>$request->sec_country,
        'is_primary'=>1]);

    $sec_addr_id1 = DB::getPDO()->lastInsertId();

    //Second Alternative Address
    $saddr2 = DB::table('addresses')->insert([
        'leads_id'=>$sec_lead_id,
        'addr_1'=>$request->sec_alt_addr1,
        'addr_2'=>$request->sec_alt_addr2,
        'postcode'=>$request->sec_alt_code,
        'city_id'=>$request->sec_alt_city,
        'state_id'=>$request->sec_alt_state,
        'country_id'=>$request->sec_alt_country,
        'is_primary'=>0]);
    $second_alt_addr_id = DB::getPDO()->lastInsertId();
    
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