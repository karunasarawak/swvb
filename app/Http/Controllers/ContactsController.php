<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Leads;
use App\Salutation;
use App\Addresses;
use App\Membership;
use App\Maritial;



class ContactsController extends Controller
{
     // input forms
  public function index(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Contacts"],["name" => "All"]
    ];

    $leads=Leads::all();
    // dd($addresses);
    $salutation=Salutation::all();
    $addresses=Addresses::all();
    // not need call satulation as ady link in lead model

    $contacts = DB::table('leads')
              ->join('salutations', 'salutations.salutation_id','leads.salutation_id')
              ->join('addresses', 'addresses.leads_id','leads.lead_id')
              ->select('salutations.salutation','leads.name','leads.gender','leads.home_no','leads.office_no','leads.whatsapp_no','leads.primary_email','leads.alt_email')
              ->get();

    $payload = ['leads'=>$leads];

    return view('pages.contacts-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function viewDetails($id){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Contacts"],["name" => "All"]
    ];

    // $salutation = Salutation::where('lead_id', $id)->get();

    $leads = DB::table('leads')
    ->where('lead_id', $id)

    ->join('salutations', 'salutations.salutation_id','leads.salutation_id')
    ->join('maritial_status', 'maritial_status.maritial_id','leads.marital_status')
    ->join('race', 'race.race_id','leads.ethnicity_id')
    ->join('religions', 'religions.religion_id','leads.religion_id')
    ->join('nationalities', 'nationalities.nation_id','leads.nationality')
    ->join('memberships', 'memberships.lead_id1','leads.lead_id')
    
    // ->join('addresses', 'addresses.leads_id','leads.lead_id')
    ->join('gender', 'gender.gender_id','leads.gender')
    ->join('packages', 'packages.package_id','memberships.package_id')
    ->select('leads.lead_id','salutations.salutation','leads.name','gender.gender_name','leads.nric',
    'leads.dob','maritial_status.maritial_name','race.race_name','religions.religion',
    'nationalities.nation','leads.occupation','leads.company','leads.home_no',
    'leads.office_no','leads.whatsapp_no','leads.primary_email','leads.alt_email', )
    ->first();  

    // $leads = Leads::where('lead_id', $id)->get();
    
    $memberships = DB::table('memberships')
    ->where('lead_id1', $id)
    ->join('packages','packages.package_id','memberships.package_id')
    ->get();
    // $membership = Membership::where('lead_id', $id)->get();
    
            // (target table, tt.link column, original table.link column)
    // var_dump(property_exists('lead_id'));
           
    $primaryAddress = DB::table('addresses')
    // ->where('leads_id', $id)
      ->join('cities', 'cities.city_id','addresses.city_id')
      ->join('countries', 'countries.id','addresses.country_id')
      ->join('states', 'states.id','addresses.state_id')
      ->where([
        ['leads_id', '=', $id], ['is_primary', '=', '1']
        ])
      // ->where('is_primary', 1)
      ->select('cities.city_name', 'countries.country_name','addresses.addr_1', 'addresses.addr_2', 'addresses.postcode', 'addresses.state_id', 'states.state_name')
      ->get();
      
      // $primaryAddress = Addresses::where([ 
      //   ['leads_id', '=' ,$id], ['is_primary', '=', 1]
      //   ])->get();

      
        
    $altAddress = DB::table('addresses')
      ->join('cities', 'cities.city_id','addresses.city_id')
      ->join('countries', 'countries.id','addresses.country_id')
      ->join('states', 'states.id','addresses.state_id')
      ->where([['leads_id', '=', $id], ['is_primary', '=', '0']])
      ->select('cities.city_name', 'countries.country_name','addresses.addr_1', 'addresses.addr_2', 'addresses.postcode', 'addresses.state_id','states.state_name')
      ->get();
        
      
      // dd($memberships);
    
//for dropdown select and display all exisitin data from databases
    $salutation = Salutation::all();

    $gender = DB::table('gender')->get();

    $maritial = DB::table('maritial_status')->get();

    $religion = DB::table('religions')->get();
    
    $race = DB::table('race')->get();

    $nation = DB::table('nationalities')->get();

    $city = DB::table('cities')->get();

    $state = DB::table('states')->get();

    $country = DB::table('countries')->get(); 
   
    $payload = ['leads' => $leads,
                'primaryAddress' => $primaryAddress[0],
                'altAddress' => $altAddress[0],
                'memberships' =>$memberships,
                'maritial' =>$maritial,
                'salutation'=>$salutation, 
                'gender'=>$gender, 
                'marital'=>$maritial,
                'religion'=>$religion,
                'race'=>$race,
                'nation'=>$nation,
                'city'=>$city,
                'state'=>$state,
                'country'=>$country,
                ];
   
    return view('pages.contacts',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

 
  
  public function editContact(Request $request, $id)
  {
    
    Leads::where('lead_id', $id)->update([
        'salutation_id' =>$request->salutation,
        'Name' =>$request->name,
        'Gender' =>$request->gender,
        'NRIC' =>$request->nric,
        'dob' =>$request->dob,
        'marital_status' =>$request->marital_status,
        'occupation' =>$request->occupation,
        'company' =>$request->company,
        'home_no' =>$request->home_no,
        'office_no' =>$request->office_no,
        'whatsapp_no' =>$request->whatsapp_no,
        'primary_email' =>$request->primary_email,
        'alt_email' =>$request->alt_email,
        'ethnicity_id' =>$request->race_name,
        'religion_id' =>$request->religion,
        'nationality' =>$request->nationalities,
        
      //   'nationalities' =>$request->nationality,
      //   'religion' =>$request->religion,
      //   'addr_1' =>$request->addr_1,
      // 'addr_2' =>$request->addr_2,
      // 'postcode' =>$request->postcode,
      // 'city' =>$request->city,
      // 'state' =>$request->state,
      // 'country' =>$request->country,
      // 'race_name' =>$request->race_name,
        //alt adress de havent enterrrrrrr
        // 'preferred_lang' =>$request->nationality,
    ]);

    // dd($request->salutation);
  
    Addresses::where('leads_id', $id)->update([
      'addr_1' =>$request->addr_1,
      'addr_2' =>$request->addr_2,
      'postcode' =>$request->postcode,
      'city_id' =>$request->city,
      'state_id' =>$request->state_name,
      'country_id' =>$request->country,
    ]);

   
   
    return redirect('/contacts/'.$id.'/details');
  }

  public function archive(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/tours", "name" => "Tours"],["name" => "Tours Archive"]
    ];

    return view('pages.tours-archive',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
  }
}
