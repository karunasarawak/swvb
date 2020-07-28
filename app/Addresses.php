<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable = [
        'lead_id',
        'addr_id',
        'mbrship_id',
        'addr_1',
        'addr_2',
        'city_id',
        'state_id',
        'postcode',
        'is_primary',
        'country_id'
    ];

    public function leads()
    {
        return $this->belongsTo('App\Leads');
    }

    public function Cities()
    {
        return $this->hasOne('App\Cities', 'city_id', 'city_id');
    }

    public function Countries()
    {
        return $this->hasOne('App\Country', 'id', 'country_id');
    }

    


}
