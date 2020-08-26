<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelAgent extends Model
{
    protected $fillable = [
        
        'ta_id',
        'ta_name',
        'ta_code',
        'ta_status',
    
    ];
}
