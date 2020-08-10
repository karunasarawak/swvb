<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lead extends Model
{
    protected $fillable = [
        'lead_id',
        'salutation_id',
        'telemarketer_id',
        'name',
        'gender',
        'mobile_no',
        'whatsapp_no',
        'credit_card_limit',
        'contact_no',
        'primary_email',
        'status',
        'preferred_lang',
        'marital_status',
        'created_at',
        'updated_at'
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'leads';

    public static function insertLeads($data)
    {
        $current = date('Y-m-d H:i:s');
        $salute = DB::table('salutations')->where('salutation', $data['salute'])->pluck('salutations.salutation_id');
        $telem = DB::table('sales_teams')->where('sales_name', $data['telem'])->pluck('sales_team_id');

        $value = DB::table('leads')
                ->insert([
                    'salutation_id' => $salute[0],
                    'telemarketer_id' => $telem[0],
                    'name' => $data['name'],
                    'credit_card_limit' => $data['credit_card'],
                    'mobile_no' => $data['mobile'],
                    'whatsapp_no' =>$data['whatsapp'],
                    'status' => 1,
                    'created_at' => $current,
                    'updated_at' => $current
                ]);

    }

    // protected $guarded = ['lead_id'];

    public function salutation()
    {
        return $this->belongsTo('App\Salutation', 'salutation_id', 'salutation_id');
    }

    public function telemarketer()
    {
        return $this->belongsTo('App\Staffs', 'telemarketer_id', 'staff_id');
    }

    public function EventLogs()
    {
        return $this->hasMany('App\EventLogs', 'lead_id', 'lead_id');
    }

    public function genders()
    {
        return $this->belongsTo('App\Gender', 'gender', 'gender_id');
    }

    public function address()
    {
        return $this->hasMany('App\Addresses', 'lead_id', 'leads_id');
    }

    public function Maritial()
    {
        return $this->hasOne('App\Maritial', 'marital_id', 'maritial_status');
    }

    public function Religion()
    {
        return $this->hasOne('App\Religion', 'religion_id', 'religion_id');
    }

    public function Nationalities()
    {
        return $this->hasOne('App\Nationalities', 'nation_id', 'nationality');
    }

    public function Membership()
    {
        return $this->hasMany('App\Membership', 'lead_id1', 'lead_id');
    }

    public function Race()
    {
        return $this->hasMany('App\Race', 'race_id', 'ethnicity_id');
    }


    //  public function Religion()
    //  {
    //      return $this->hasOne('App\Religion', 'religion_id','religion');
    //  }
    
   
}
