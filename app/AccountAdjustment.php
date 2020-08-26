<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAdjustment extends Model
{
    protected $fillable = [
        'aict_req_detail_id',
        'aict_req_id',
        'doc_id',
        'inv_itm_type_id',
        'doc_type',
        'unit_price',
        'rounding',
        'total_price',
        'reason'
    ];

    protected $table = 'acc_ict_requests_details';

    public function invoice()
    {
        return $this->belongsto('App\Invoice', 'doc_id', 'inv_id');
    }

    public function receipt()
    {
        return $this->belongsto('App\Receipt', 'doc_id', 'receipt_id');
    }
}
