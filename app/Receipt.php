<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'receipt_id',
        'receipt_no',
        'mbrship_id',
        'collected_by',
        'method',
        'bank_in_to',
        'bank_in_ref_no',
        'receipt_amount',
        'invoice_amount',
        'receipt_prepayment',
        'remark',
        'issue_date',
        'status',
        'created_by',
        'created_at',
        'updated_at'
    ];
}