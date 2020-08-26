<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = [
        'accom_id',
        'ta_id',
        'accom_cat_id',
        'state_id',
        'country_id',
        'city_id',
        'postcode',
        'club',
        'accom_name',
        'accom_addr',
        'admin_charges',
        'min_stay',
        'min_lead_time',
        'min_lead_time_unit',
        'max_lead_time',
        'max_lead_time_unit',
        'cxl_deadline',
        'cxl_deadline_unit',
        'accom_remarks',
        'is_active',
       
    ];

    public function travelagent()
    {
            return $this->hasOne('App\TravelAgent', 'ta_id', 'ta_id');
    }
}
