<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICTRequestAcc extends Model
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
        'aict_req_status',
    ];

    protected $table = 'acc_ict_requests';

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'aict_mbrship_id', 'mbrship_id');
    }

    public function reservation()
    {
        return $this->belongsTo('App\Reservation', 'mbrship_id', 'mbrship_id');
    }

    public function verifystaff()
    {
        return $this->belongsTo('App\Staff', 'aict_verifier', 'staff_id');
    }

    public function approvestaff()
    {
        return $this->belongsTo('App\Staff', 'aict_approval', 'staff_id');
    }

    public function reqstaff()
    {
        return $this->belongsTo('App\Staff', 'aict_requested_by', 'staff_id');
    }
}
