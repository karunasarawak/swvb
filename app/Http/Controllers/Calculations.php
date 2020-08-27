<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Calculations extends Controller
{
    //
    public static function getInstallationToDate($mbrship_id)
    {
        $date = date('Y-m-d');
        $current_installment_amt = DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $mbrship_id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('total');

        return round($current_installment_amt,2);
    }

    public static function getAmfToDate($mbrship_id)
    {
        $date = date('Y-m-d');
        $current_amf_amt = DB::table('invoices')
        ->where('type', 'AMF')
        ->where('mbrship_id', $mbrship_id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('total');

        return round($current_amf_amt,2);
    }
    
    public static function getOutstandingInstallation($mbrship_id)
    {
        $date = date('Y-m-d');
        $outst_installation_amt = DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $mbrship_id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        return round($outst_installation_amt, 2);
    }

    public static function getEntitlement($mbrship_id)
    {
        $date = date('Y-m-d');
        $ent = DB::table('memberships')
        ->join('installments', 'installments.mbrship_id','memberships.mbrship_id')
        ->join('installment_ent_point_schedules', 'installment_ent_point_schedules.install_id','installments.install_id')
        ->where('mbrship_id', $mbrship_id)
        ->whereNotEmpty('alloc_date')
        ->sum('balance');

        return round($ent, 2);
    }

    public static function getOutstandingAmf($mbrship_id)
    {
        $date = date('Y-m-d');
        $outst_amf_amt = DB::table('invoices')
        ->where('type', 'AMF')
        ->where('mbrship_id', $mbrship_id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        return round($outst_amf_amt, 2);
    }

    public static function getTotalOutstanding($mbrship_id)
    {
        $date = date('Y-m-d');
        $outstanding_inv = DB::table('invoices')
        ->where('mbrship_id', $mbrship_id)
        ->whereNotNull('issue_date')
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        $outstanding_dn = DB::table('debit_notes')
                        ->where('mbrship_id', $mbrship_id)
                        ->whereNotNull('pymt_date')
                        ->sum('amount');

        $outstanding_amt = $outstanding_inv + $outstanding_dn;

        return round($outstanding_amt, 2);
    }

    public static function getInstallmentPaidPercent($mbrship_id)
    {
        $date = date('Y-m-d');
        $installment = DB::table('installments')
                        ->where('mbrship_id', $mbrship_id);
    }

    public function calcTransferFee($mbrship_id)
    {
    }

    public function getReservationFees()
    {

    }
}