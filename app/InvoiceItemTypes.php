<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItemTypes extends Model
{
    protected $fillable = [
        'inv_itm_type_id',
        'acc_code',
        'item',
        'is_active',
    ];

    // protected $guarded = ['inv_itm_type_id'];
}
