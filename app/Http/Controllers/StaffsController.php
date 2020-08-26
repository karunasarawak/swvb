<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StaffsController extends Controller
{
    //
    public static function getStaffName($staff_id)
    {
        $sales_member = DB::table('staffs')
                        ->where('staff_id', $staff_id)
                        ->get();

        return $sales_member[0]->staff_name;
    }
}
