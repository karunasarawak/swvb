<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
        'tid',
        'mid',
        'epp',
        'charge_type',
        'bank_charges',
        'merchant_bank',
    ];
}
