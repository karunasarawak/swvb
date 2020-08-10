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

    protected $table = 'points_ict_requests';


}
