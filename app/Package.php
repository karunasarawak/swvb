<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable = 
    [
            'package_id',
            'package',
            'package_code',
            'no_of_package',
            'package_wd',
            'package_we',
            'package_pts',
            'package_price',
            'package_desc',
            'package_amf',
            'package_term',
            'usage_year',
            'package_status',
    ];
}
