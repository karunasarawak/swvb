<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAdjustments extends Model
{
    protected $fillable = [
        'aict_req_id',
        
        'aict_mbrship_id',
        'aict_rsvn_id',
        
        'aict_requested_by',
        'aict_verifier',
        'aict_approval',
        'aict_processed',
        'aict_ref_no',
        'aict_date_requested',
        'aict_date_verified',
        'aict_date_approved',
        'aict_date_processed',
        'aict_remarks',
        'aict_other_remarks',
        'aict_req_status'
    ];
}
