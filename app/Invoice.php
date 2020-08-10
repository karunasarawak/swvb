<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'inv_id',
        'inv_no',
        'mbrship_id',
        'mbrship_name',
        'items_amount',
        'tax_amount',
        'rounding',
        'total',
        'inv_disc_method',
        'inv_disc',
        'inv_disc_note',
        'tax',
        'tax_note',
        'remark',
        'issue_date',
        'inv_status',
        'inv_creator',
    ];

    // protected $guarded = ['inv_id'];

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'mbrship_id', 'mbrship_id');
    }

    public function invoiceItem()
    {
        return $this->hasMany('App\InvoiceItem', 'inv_id', 'inv_id');
    }
}
