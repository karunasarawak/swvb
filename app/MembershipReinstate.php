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
            'receipt_id',
            'late_payment',
            'payable',
            'reinstate'
            
    ];

    protected $table = 'membership_reinstate';

    public function Membership(){
        return $this->belongsto('App\Membership', 'membership_id', 'mbrship_id');
    }

    public function receipt(){
        return $this->hasOne('App\Receipt', 'receipt_id', 'receipt_id');
    }
}
