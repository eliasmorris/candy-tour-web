<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideImage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'slide_name',
        'slide_image',
        'head_caption',
        'slide_caption',
        'status'
    ];
}
