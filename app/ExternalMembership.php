<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalMembership extends Model
{
    //
    protected $fillable = [
            'ext_mbrship_id',
            'mbrship_id',
            'enrolled_by',
            'com_channel_id',
            'ext_membership_type',
            'ext_membership_no',
            'expiry_date',
            'request_date',
            'enroll_status',
            'enrolled_date',
            'enroll_remarks',
    ];
}

