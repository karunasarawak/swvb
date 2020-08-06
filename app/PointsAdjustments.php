<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointsAdjustments extends Model
{
    protected $fillable = [
        'pict_req_detail_id',
        'mbrship_id',
        'pict_req_id',
        'poe_year',
        'points',
        'we',
        'wd',
        'expiry_date',
        'req_type',
    ];
}
