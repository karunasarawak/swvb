<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lead;
use App\Salutation;
use App\Tour;
use App\SalesVenue;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class ToursController extends Controller
{
  //Input Forms
  public function index()
  {

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Tours"],["name" => "All"]
    ];

    $leads = Lead::all();
    $sallist = Salutation::all();
    // $tours = Tour::all();  
    $salesVenues = SalesVenue::all();

    $venue = DB::table('sales_venues')->where('venue_status',1)->get();

    // $checkLead = DB::table('tours')->get();

    $tours_s = DB::table('tours')
                ->join('leads','leads.lead_id','tours.lead_id1')
                ->join('salutations','salutations.salutation_id','leads.salutation_id')
                ->join('sales_venues','sales_venues.sales_venue_id','tours.sales_venue_id')
                ->join('sales_teams','sales_teams.sales_team_id','tours.sales_personnel_id')
                ->where('tours.is_archive', '!=',0)
                ->select('salutations.salutation','tours.tour_id','tours.lead_id1','leads.name',
                'tours.tour_date','tours.tour_initial_time','tours.tour_time_in','tours.tour_time_out',
                'tours.tour_attend','sales_teams.sales_team_id','sales_venues.venue_name','sales_venues.sales_venue_id','sales_teams.sales_name')
                ->orderBy('tours.tour_id')
                ->get();
    // dd($tours_s);
    $payload = ['tours_s'=> $tours_s];
    // dd($leads);

    return view('pages.tours-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs,'payload'=>$payload, 'venues'=> $venue]);
  }

  public function newTour($lead_id)
  {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Tours"],["name" => "Schedule Tour"]
    ];


    $leads = DB::table('leads')
            ->where('lead_id',$lead_id)
            ->join('salutations','salutations.salutation_id','leads.salutation_id')
            ->join('sales_teams','sales_teams.sales_team_id','leads.telemarketer_id')
            ->select('leads.name','leads.lead_id','salutations.salutation','leads.mobile_no','leads.whatsapp_no','leads.credit_card_limit','sales_teams.sales_name')
            ->get();

    // dd($leads);

    $countries = DB::table('countries')->get();
    $states = DB::table('states')->get();
    $cities = DB::table('cities')->get();
    $venues = DB::table('sales_venues')->where('venue_status',1)->get();
    $salesp = DB::table('sales_teams')->where('sales_role_id',2)->get();

    $payload = ['leads'=> $leads[0], 'countries'=>$countries, 'states'=>$states, 'cities'=>$cities,'venues'=>$venues, 'salesp'=>$salesp];

    return view('pages.tours-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  //Attend Tour Details
  //DONE
  public function attendTour(Request $request, $tour_id)
  {
    if($request->notAttend == 3)
    {
      Tour::where('tour_id',$tour_id)->update(['tour_attend'=>$request->notAttend]);
      return redirect('/tours');
    }
    else
    {
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [["link" => "/", "name" => "Home"],["link" => "/tours","name" => "Tours"],["name" => "Tour Attend Details"]];
  
      $attend = DB::table('tours')
        ->join('leads','leads.lead_id','tours.lead_id1')
        ->where('tours.tour_id', $tour_id)
        ->select('leads.name','leads.lead_id','tours.sales_personnel_id','leads.mobile_no','leads.whatsapp_no','leads.salutation_id','tours.tour_month_income','tours.sales_venue_id','tours.tour_id')
        ->get();
        // dd($attend);
      
      $allLead = DB::table('leads')->get();
      $venue = DB::table('sales_venues')->where('venue_status',1)->get();
      $nation = DB::table('nationalities')->get();
      $gender = DB::table('gender')->get();
      $maritial = DB::table('maritial_status')->get();
      $country = DB::table('countries')->get();
      $religion = DB::table('religions')->get();
      $race = DB::table('race')->get();
      
      $salesp = DB::table('sales_teams')->where('sales_role_id', 2)->get();
      // dd($salesp);
      $salesm = DB::table('sales_teams')->where('sales_role_id', 3)->get();
      $ma = DB::table('sales_marketing_agency')->get();
      
      // dd($nation);
      $payload = [
                  'allLead'=>$allLead,
                  'attend'=>$attend[0], 
                  'venue'=>$venue, 
                  'gender'=>$gender, 
                  'maritial'=>$maritial,
                  'nation'=>$nation, 
                  'country'=>$country, 
                  'religion'=>$religion, 
                  'race'=>$race,
                  'salesp'=>$salesp,
                  'salesm'=>$salesm,
                  'ma'=>$ma];

      return view('pages.tours-attend',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }
    
  }

  //Update/EditTime
  //DONE
  public function editTime(Request $request)
  {
    Tour::where('tour_id', $request->tourid)
      ->update(['tour_date'=>$request->date, 'tour_initial_time'=>$request->time,'sales_venue_id'=>$request->venue]);

    return redirect('tours');
  }

  public function viewDetails(Request $request, $tour_id)
  {
      // dd($request);
      $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Tours"],["name" => "Tour Details"]
      ];

      $telem = Lead::where('lead_id', $request->leadid)->pluck('telemarketer_id');

    // Update Lead
    $updateLead = Lead::where('lead_id', $request->leadid)
                ->update([
                  'salutation_id'=>$request->salutation1,
                  'name'=>$request->name1,
                  'gender'=> $request->gender1,
                  'nric'=>$request->nric1,
                  'dob'=>$request->dob1,
                  'marital_status'=>$request->status1,
                  'ethnicity_id' => $request->race1,
                  'religion_id'=>$request->religion1,
                  'venue_id'=>$request->venue1,
                  'nationality' =>$request->nationality1,
                  'occupation' =>$request->occupation1,
                  'company' =>$request->company1,
                  'mobile_no' =>$request->mobileno1,
                  'whatsapp_no' =>$request->whatsapp1,
                  'home_no'=>$request->homeno1,
                  'office_no'=>$request->officeno1,
                  'primary_email'=>$request->pemail1,
                  'alt_email' =>$request->aemail1
                  ]);


    //Update Tour
    $updateTour = Tour::where('tour_id', $request->tourid)
              ->update([
                'sales_venue_id'=>$request->venue1,
                'tour_time_in'=>$request->timeIn1,
                'tour_time_out'=>$request->timeOut1,
                'tour_month_income'=>$request->income1,
                'tour_no_of_children'=>$request->no_child1,
                'tour_outcome'=>$request->tourOutcome1,
                'tour_remarks'=>$request->remark,
                'sales_personnel_id'=>$request->salesp1,
                'sales_manager_id'=>$request->salesm1,
                'tour_marketing_agency'=>$request->ma1,
                'tour_proceed_contract'=>$request->contract,
                'tour_attend'=>1
              ]);
      

    
    //Existing
    if($request->exist_lead != null)
    {
      $update = Tour::where('tour_id', $request->tourid)->update(['lead_id2'=>$request->exist_lead]);
      $second_lead_id = $request->exist_lead;
    }
    //NewLead
    else if($request->exist_lead == null)
    {
      if($request->name2 != null || $request->gender != null)
      {
        $current = date('Y-m-d H:i:s');
        $createLead = DB:: table('leads')->insert([
          'salutation_id'=>$request->salutation2,
          'name'=>$request->name2,
          'gender'=> $request->gender2,
          'nric'=>$request->nric2,
          'dob'=>$request->dob2,
          'venue_id'=>$request->venue1,
          'marital_status'=>$request->status2,
          'ethnicity_id' => $request->race2,
          'telemarketer_id'=>$telem[0],
          'religion_id'=>$request->religion2,
          'nationality' =>$request->nationality2,
          'occupation' =>$request->occupation2,
          'company' =>$request->company2,
          'mobile_no' =>$request->mobileno2,
          'whatsapp_no' =>$request->whatsapp2,
          'home_no'=>$request->homeno2,
          'office_no'=>$request->officeno2,
          'primary_email'=>$request->pemail2,
          'alt_email' =>$request->aemail2,
          'status'=>1,
          'created_at'=>$current,
          'updated_at'=>$current
          
        ]);

        $second_lead_id = DB::getPDO()->lastInsertId();
        $update = Tour::where('tour_id', $request->tourid)->update(['lead_id2'=>$second_lead_id]);
        
      }
      else
      {
        $update = Tour::where('tour_id', $request->tourid)->update(['lead_id2'=>null]);
        $second_lead_id = null;
      }

      
    }

      // Generate voucher number
      $voucher = rand(0,99999);
      $newVoucher = "CV".$voucher;

      //Check if want to apply vouchers
      // if Yes
      if($request->acv == 1)
      {
        //Create Vouchers
        $createVoucher = DB::table('vouchers')
          ->insert([
            'accom_id'=>$request->accom1,
            'voucher_no'=>$newVoucher,
            'no_occupancy'=>$request->occup1,
            'night'=>$request->stay1,
            'cv_start_date'=>$request->cv_start1,
            'cv_exp_date'=>$request->cv_exp1,
            'start_day'=>1,
            'end_day'=>4,
            'has_used'=>0,
            'voucher_status'=>1,
          ]);

        //Get last voucher id
        $last_voucher_id = DB::getPDO()->lastInsertId(); 
        
        //Check Voucher Apply Attendees
        // if(in_array('1', $request->get('apply')))
        // {

        // }
        
        // if(in_array('2', $request->get('apply')))
        // {

        // }

        //Update tour voucher id
        $update = Tour::where('tour_id', $request->tourid)->update(['voucher_id'=>$last_voucher_id]);

      }   
    
    
    // dd($second_lead_id);
    $details = DB::table('tours')
          ->join('leads','leads.lead_id','tours.lead_id1')
          ->join('gender','gender.gender_id','leads.gender')
          ->join('maritial_status','maritial_status.maritial_id','leads.marital_status')
          ->join('religions', 'religions.religion_id','leads.religion_id')
          ->join('sales_venues','sales_venues.sales_venue_id','tours.sales_venue_id')
          ->join('sales_teams','sales_teams.sales_team_id','leads.telemarketer_id')
          ->join('sales_marketing_agency','sales_marketing_agency.ma_id','tours.tour_marketing_agency')
          ->join('vouchers','vouchers.voucher_id','tours.voucher_id')
          ->where('tour_id', $tour_id)
          ->get();

    $sp = DB::table('tours')
          ->join('sales_teams','sales_teams.sales_team_id','tours.sales_personnel_id')
          ->where('tour_id', $tour_id)
          ->get();

    $sm = DB::table('tours')
          ->join('sales_teams','sales_teams.sales_team_id','tours.sales_manager_id')
          ->where('tour_id', $tour_id)
          ->get();

    if($second_lead_id != null)
    {
      $detail2 = DB::table('leads')->where('lead_id', $second_lead_id)
      >join('gender', 'gender.gender_id', 'leads.gender')
      ->join('maritial_status', 'maritial_status.maritial_id', 'leads.marital_status')
      ->join('religions', 'religions.religion_id', 'leads.religion_id')
      ->get();
    }
    else
    {
      $detail2 = null;
    }
    
                    
    // $lead_id2 = DB::table('tours')
    //             ->where('tour_id', $tour_id)->get('tours.lead_id2');

    $payload = ['details'=> $details[0],'detail2'=>$detail2[0], 'sp'=>$sp[0], 'sm'=>$sm[0]];


    return view('pages.tours-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function showDetails(Request $request, $tour_id)
  {
    $pageConfigs = ['pageHeader' => true];

      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Tours"],["name" => "Tour Details Preview"]
      ];

    $details = DB::table('tours') 
            ->join('leads','leads.lead_id','tours.lead_id1')
            ->join('gender','gender.gender_id','leads.gender')
            ->join('maritial_status','maritial_status.maritial_id','leads.marital_status')
            ->join('religions', 'religions.religion_id','leads.religion_id')
            ->join('sales_venues','sales_venues.sales_venue_id','tours.sales_venue_id')
            ->join('sales_teams','sales_teams.sales_team_id','leads.telemarketer_id')
            ->join('sales_marketing_agency','sales_marketing_agency.ma_id','tours.tour_marketing_agency')
            ->join('vouchers','vouchers.voucher_id','tours.voucher_id')
            ->where('tour_id', $tour_id)
            ->get();
    // dd($details);
    $lead_id2 = DB::table('tours')->where('tour_id', $tour_id)->pluck('tours.lead_id2');
    // dd($lead_id2);

    if($lead_id2[0] != null)
    {
      $detail2 = DB::table('leads')->where('lead_id', $lead_id2[0])
      ->join('gender', 'gender.gender_id', 'leads.gender')
      ->join('maritial_status', 'maritial_status.maritial_id', 'leads.marital_status')
      ->join('religions', 'religions.religion_id', 'leads.religion_id')
      ->get();

      // dd($detail2);
    }
    else
    {
      $detail2 = null;
    }

    $sp = DB::table('tours')
          ->join('sales_teams','sales_teams.sales_team_id','tours.sales_personnel_id')
          ->get();

    $sm = DB::table('tours')
          ->join('sales_teams','sales_teams.sales_team_id','tours.sales_manager_id')
          ->get();


    $payload = ['details'=>$details[0], 'detail2' => $detail2[0], 'sp'=>$sp[0], 'sm'=>$sm[0]];
    

    return view('pages.tours-details', ['payload'=>$payload]);
  }


  //DONE
  public function storeTour(Request $request, $lead_id)
  {

    $pageConfigs = ['pageHeader' => true];
        
    $insert = Tour::insert(
      ['lead_id1'=>$lead_id,
      'sales_personnel_id'=>$request->salesp,
      'sales_venue_id'=>$request->venue,
      'tour_date'=>$request->date,
      'tour_initial_time'=>$request->time,
      'sales_venue_id'=>$request->venue,
      'is_archive'=>2
      // 'tour_countries'=>$request->country,
      // 'tour_states'=>$request->state,
      // 'tour_cities'=>$request->city,
      ]);

      // dd($request);

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Tours"],["name" => "Tours Archive"]
    ];

    return redirect('/tours');
  }

  public function archiveTour(Request $request, $tour_id)
  {
    if($request->archive == 0)
    {
      Tour::where('tour_id', $tour_id)->update(['tours.is_archive'=> 0]);
      return redirect("tours");
    }
    else if ($request->archive == 1)
    {
      Tour::where('tour_id', $tour_id)->update(['tours.is_archive'=> 1]);
      return redirect("tours/archive");
    }

    
  }
  
  public function showAllArchive()
  {
   $allArchieve = DB::table('tours')
            ->join('leads','leads.lead_id','tours.lead_id1')
            ->join('salutations','salutations.salutation_id','leads.salutation_id')
            ->join('sales_venues','sales_venues.sales_venue_id','tours.sales_venue_id')
            ->join('sales_teams','sales_teams.sales_team_id','tours.sales_personnel_id')
            ->where('tours.is_archive',0)
            ->select('salutations.salutation','tours.tour_id','tours.lead_id1','leads.name',
            'tours.tour_date','tours.tour_initial_time','tours.tour_time_in','tours.tour_time_out',
            'tours.tour_attend','sales_teams.sales_team_id','sales_venues.venue_name','sales_venues.sales_venue_id','sales_teams.sales_name')
            ->orderBy('tours.tour_id')
            ->get();

    $payload = ['allArchive' => $allArchieve];

    return view('pages.tours-archive', ['payload'=>$payload]);
  }

}