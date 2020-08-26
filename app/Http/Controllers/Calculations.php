<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Calculations extends Controller
{
    //
    public static function getInstallationToDate($id)
    {
        $date = date('Y-m-d');
        $current_installment_amt = DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('total');

        return $current_installment_amt;
    }

    public static function getAmfToDate($id)
    {
        $date = date('Y-m-d');
        $current_amf_amt = DB::table('invoices')
        ->where('type', 'AMF')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('total');

        return $current_amf_amt;
    }
    
    public static function getOutstandingInstallation($id)
    {
        $date = date('Y-m-d');
        $outst_installation_amt = DB::table('invoices')
        ->where('type', 'Installment')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        return $outst_installation_amt;
    }

    public static function getOutstandingAmf($id)
    {
        $date = date('Y-m-d');
        $outst_amf_amt = DB::table('invoices')
        ->where('type', 'AMF')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        return $outst_amf_amt;
    }

    public static function getTotalOutstanding($id)
    {
        $date = date('Y-m-d');
        $outstanding_amt = DB::table('invoices')
        ->where('mbrship_id', $id)
        ->whereDate('issue_date', '<=', $date)
        ->sum('balance');

        return $outstanding_amt;
    }
}