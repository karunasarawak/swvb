<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItems extends Model
{
    protected $fillable = [
        'inv_itm_id',
        'inv_id',
        'inv_itm_type_id',
        'item_name',
        'amount',
    ];

    // protected $guarded = ['inv_itm_id'];

    public function invoiceItemTypes()
    {
        return $this->belongsTo('App\InvoiceItemTypes', 'inv_itm_type_id', 'inv_itm_type_id');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice', 'inv_id', 'inv_id');
    }
}
