<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesTeamController extends Controller
{
    //
    public static function getSalesTeamMemberName($sales_id)
    {
        $sales_member = DB::table('sales_teams')
                        ->where('sales_team_id', $sales_id)
                        ->get();

        return $sales_member[0]->sales_name;
    }
}
