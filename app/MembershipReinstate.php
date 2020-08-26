<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipReinstate extends Model
{
    //
    protected $fillable = [
            'reinstate_id',
            'membership_id',
            'ref_no',
            'date', 
            'amt_due',
            'total_amount',
            'pt_offset_amt',
            
    ];

    protected $table = 'membership_reinstate';

    public function Membership(){
        return $this->belongsto('App\Membership', 'membership_id', 'mbrship_id');
    }
}
