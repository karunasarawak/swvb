<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $fillable = [
        'salutation_id',
        'telemarketer_id',
        'name',
        'mobile_no',
        'whatsapp_no',
        'credit_card_limit',
    ];

    protected $guarded = ['lead_id'];
}
