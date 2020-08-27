<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallmentEntPointSchedule extends Model
{
    //
    protected $fillable = [
        'ieps_id',
        'install_id', //from installment
        'inv_id',
        'alloc_desc',
        'amount_allocated',
        'unit_type',
        'balance',
        'projected_alloc_date',
        'alloc_date',
        'exp_date',
        'term',
        
    ];
}
