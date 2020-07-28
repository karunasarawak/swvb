<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'mbrship_id',
        'mbrship_no',
        'lead_id1',
        'lead_id2',
        'lang',
        'relationship',
        'pri_addr_id',
        'alt_addr_id',
        'remarks',
        'contract_type',
        'comp_id',
        'application_no',
        'application_date',
        'agreement_no',
        'agreement_date',
        'package_id',
        'install_schedule_id',
        'overpayment',
        'cc_id_amf',
        'cc_id_install',
        'declaration_no',
        'mro', 
        'cco',
        'install_auto',
        'amf_auto',
        'mbrship_status'
    ];

    public function lead()
    {
        return $this->belongsTo('App\Leads', 'lead_id', 'lead_id');
    }

    public function address()
    {
        return $this->belongsto('App\Addresses', 'addr_1', 'addr_1');
    }
}
