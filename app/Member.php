<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{
    protected $fillable = [
        'lead_id',
        'mbrship_id',
        'mbr_type',
        'relationship'
    ];
    protected $primaryKey='member_id';

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'members';    
   
}
