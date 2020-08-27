<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallmentSchedule extends Model
{
    protected $primaryKey='is_id';
    protected $fillable = [
        'net',
        'bank_charge', //from installment
        'balance',
        'term',
        'projected_alloc_date',
        'install_id',
        'alloc_date'
    ];

    public static function schedule($install_id,$net,$interest,$term,$date,$installment=0,$lastterm=0){
        $duration=$term-$lastterm;
        $admin_charges=round($net*$interest/100);
        $bal=round($net+$admin_charges,2);
       
        if(empty($installment) || $installment<0.01){
            $installment=$bal/$duration;
        }
        
        $admin_charge_month=$installment*$interest/($interest+100);
        //$admin_charge_month= round($admin_charges/$duration,2);
        $net_month=round($installment-$admin_charge_month,2);
        $dp=array();
        $lastterm++;
        
        while($lastterm<$term){
            $admin_charges-=$admin_charge_month;
            $bal-=$net_month;
            $bal-=$admin_charge_month;

            $dp['term']=$lastterm;
            $dp['net']=$net_month;
            $dp['bank_charge']=$admin_charge_month;
            $bal=round($bal,2);
            $dp['balance']=$bal;

            $dp['projected_alloc_date']=$date;
            $dp['alloc_date']=$date;
            $dp['install_id']=$install_id;
           
            InstallmentSchedule::create($dp);
            $date=date('Y-m-d',strtotime($date.'+1month'));
            $lastterm++;
        }
        
        $dp['term']=$lastterm;
        $dp['net']=round($bal-$admin_charges,2);
        $dp['bank_charge']=round($admin_charges,2);
        $dp['balance']=0;
        $dp['projected_alloc_date']=$date;
        $dp['alloc_date']=$date;
        $dp['install_id']=$install_id;
        InstallmentSchedule::create($dp);
      
    }
}
