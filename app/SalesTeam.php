<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesTeam extends Model
{
    //
    protected $fillable = [
        'sales_team_id',
        'sales_role_id',
        'sales_name',
        'sales_ma_id',
        
    ];
}
