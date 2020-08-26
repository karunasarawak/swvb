<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipRepurchase extends Model
{
    //
    protected $fillable = [
        'mbrship_id',
        'current_ent_wd',
        'current_ent_we',
        'payment_to_date',
        'amf_payment_to_date',
        'outstanding_amt',
        'applicant_name',
        'request_date',
        'request_received_date',
        'current_mbrship_period',
        'repurchase_amount',
        'nett_repurchase_amount',
        'remarks',
        'account_holder',
        'bank_name',
        'account_no',
        'address'
    ];

    protected $guarded = ['repurchase_id'];

    protected $table = 'repurchase';

    public function Membership(){
        return $this->belongsto('App\Membership', 'mbrship_id', 'mbrship_id');
    }
}
