<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StampingFeeList extends Model
{
    protected $fillable = [
        'sfl_id',
        'sfb_id',
        'mbrship_no'
    ];

    protected $table = 'stamping_fee_list';
}
