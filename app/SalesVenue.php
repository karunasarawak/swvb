<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesVenue extends Model
{
    // 
    protected $fillable = [
        'sales_venue_id',
        'venue',
        'sales_venue_address'];
}
