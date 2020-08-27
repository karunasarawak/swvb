<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $primaryKey='install_id';
    protected $fillable = [
        'mbrship_id',
        'install_id',
        'package_price', //from installment
        'admin_charges',
        'install_duration',
        'addition',
        'addition_remark',
        'discount',
        'discount_remark',
        'net_price',
        'downpayment',
        'admin_charges',
        'outstanding',
        'monthly_installment',
        'status',
        'type'
    ];

    protected $table = 'installments';

    public function installmententptschedule()
    {
        return $this->hasMany('App\InstallmentEntPointSchedule', 'install_id', 'install_id');
    }
}
