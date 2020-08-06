<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ICTRequestAdmin extends Model
{
    protected $fillable = [
        'ict_req_id',
        'requested_by',
        'resolved_by',
        'dept_id',
        'request',
        'ict_req_created_at',
        'attachment_directory',
        'approval_by',
        'mbrship_id',
        'verified_by',
        'resolved_dateline',
        'ict_remarks',
        'ict_req_status',
       
    ];

    protected $table = 'ict_requests';
}
