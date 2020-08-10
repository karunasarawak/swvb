<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'voucher_id',
        'accom_id',
        'voucher_no',
        'no_occupancy',
        'night',
        'cv_start_date',
        'cv_exp_date',
        'start_day',
        'end_day',
        'has_used',
        'voucher_status'
    ];

    protected $primaryKey = 'voucher_id';

}
