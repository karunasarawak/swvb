<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepurchasePrice extends Model
{
    //
    protected $fillable =[
         'rp_id',
         'term',
         'package_ID',
         'unit',
         'value'
    ];

    protected $table = 'repurchase_price';
}
