<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipRepurchase extends Model
{
    //
    protected $fillable = [
        'repurchase_id',
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

    public function memberdetail($id)
    {
        $md=Membership::where('mbrship_id',$id)->first();

        $s=DB::table('salutations')->where('salutation_id',$md['lead']->salutation_id)->first();
        $md['lead']->salutation=$s->salutation;
        if(!empty($md->lead_id2)){
          $md['lead2']=DB::table('leads')->where('lead_id',$md->lead_id2)->first();
          $s=DB::table('salutations')->where('salutation_id',$md['lead2']->salutation_id)->first();
          $md['lead2']->salutation=$s->salutation;
        }
        $md['package']=DB::table('packages')->where('package_id',$md->package_id)->first();
        echo json_encode($md);
    }
}
