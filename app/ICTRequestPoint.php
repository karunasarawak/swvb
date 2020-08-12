<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICTRequestPoint extends Model
{
    protected $fillable =[
        'ict_req_id',
        'staff_id',
        'rsvn_id',
        'use_year',
        'mbrship_id',
        'pict_req_by',
        'pict_verifier',
        'pict_approval',
        'pict_processed',
        'wd_points',
        'proposed_expdate',
        'we',
        'poe',
        'pict_req_created_at',
        'pict_req_status'
    ];

    protected $table = 'ict_requests';

    public function verifystaff()
    {
        return $this->belongsTo('App\Staff', 'pict_verifier', 'staff_id');
    }

    public function approvestaff()
    {
        return $this->belongsTo('App\Staff', 'pict_approval', 'staff_id');
    }

    public function reqstaff()
    {
        return $this->belongsTo('App\Staff', 'pict_req_by', 'staff_id');
    }

    public function department()
    {
        return $this->hasMany('App\Department', 'dept_id', 'staff_id');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'mbrship_id', 'mbrship_id');
    }

    public function reservation()
    {
        return $this->belongsTo('App\Reservation', 'mbrship_id', 'mbrship_id');
    }




}
