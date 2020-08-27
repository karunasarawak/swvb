<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $primaryKey='mbrship_id';
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
        'has_card',
        'has_stamped',
        'cc_id_amf',
        'cc_id_install',
        'declaration_no',
        'mro', 
        'cco',
        'install_auto',
        'amf_auto',
        'mbrship_status'
    ];

    protected $table = 'memberships';

    public function lead()
    {
        return $this->belongsTo('App\Lead', 'lead_id1', 'lead_id');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour', 'lead_id1', 'lead_id1');
    }

    public function address()
    {
        return $this->belongsto('App\Address', 'addr_1', 'addr_1');
    }

    public function reservation()
    {
        return $this->hasOne('App\Reservation', 'mbrship_id', 'mbrship_id');
    }

    public function ictrequestpoint()
    {
        return $this->hasOne('App\ICTRequestPoint', 'mbrship_id', 'pict_mbrship_id');
    }

    public function package()
    {
        return $this->hasOne('App\Package', 'package_id', 'package_id');
    }

    public function installment()
    {
        return $this->hasMany('App\Installment', 'mbrship_id', 'mbrship_id');
    }

    public function extmembership()
    {
        return $this->hasMany('App\ExternalMembership', 'mbrship_id', 'mbrship_id');
    }


}
