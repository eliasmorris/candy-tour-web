<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'mailfrom',
        'phoneNumber',
        'startdate',
        'enddate',
        'packagename',
        'vistornumber',
        'packagecost',
        'totalcost'
    ];
    
}
