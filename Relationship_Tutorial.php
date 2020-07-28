
MODEL

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $fillable = [
        'lead_id',
        'salutation_id',
        'telemarketer_id',
        'name',
        'mobile_no',
        'whatsapp_no',
        'credit_card_limit',
        'lead_id',//to mmbr
        'name', //to mmbr
        'NRIC', //to mmbr
        'contact_no', //to mmbr
        'primary_email', //to mmbr
    ];

    // // protected $guarded = ['lead_id'];

    public function salutation() //Declare Relationship name to be used in Controller for querying results from database
    {                        
        return $this->belongsTo('App\Salutation', 'salutation_id', 'salutation_id'); // Relationhip from current Leads table to Salutation table.
    }               //belongsTo('Model Name (Eg: App\Salutation)', 'Foreign Key column name in Leads Table', 'Primary Key column name in Salutation table');

    public function telemarketer()
    {                        
        return $this->belongsTo('App\Staff', 'telemarketer_id', 'staff_id'); //Second Relationship
    }   

    //LIST OF RELATIONSHIP
    // $this->belongsTo(); // Get data from the table referenced with foreign key;
    // $this->hasOne(); // Get data from table that has this table's primary key as foreign key (One to One)
    // $this->hasMany(); // Get all relevant entries that has this table's primary key as foreign key (One to Many)
}

?>

CONTROLLER

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Leads;

class LeadsController extends Controller
{
  public function index(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Leads"],["name" => "All"]
    ];
            //Return Leads with function name that has been declared, given that you want to get that certain data;
    $leads = Leads::with('salutation', 'telemarketer')->get();
    //Leads::with('function name that has been declared in Model', <-this comma for multiple function/relationhip that needs to be fetched)->get();

    $payload = ['leads'=>$leads]; // NO NEED FOR THIS FRICKIN PAYLOAD ANYMORE IF TABLE ARE ALL INTERCONNECTED RELATIONSHIP YAY!

    return view('pages.leads-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'leads'=>$leads]);
  }
}

?>

BLADE VIEW

'leads'=>$leads was declared so:

$leads-> (This is the main array that was declared in the controller)

$leads->salutation (Relationship/Function name declared in the model)

$leads->salutation->salutation_name (Column Name in Salutation Table)

$leads->lead_name (For fetching data one level higher, basically from the Leads main array/table)

{{$leads->salutation->salutation_name}}

{{$leads->telemarketer->staff_name}} <- if got multiple relationship defined, just replace salutation with the other relationhip name

