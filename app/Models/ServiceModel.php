<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'severice_name',
        'service_description',
        'service_image',
        'status',
    ];
}
