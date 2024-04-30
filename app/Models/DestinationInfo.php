<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DestinationInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function packageinfo(): HasMany{

        return $this->hasMany(PackageInfo::class);
    }

    // protected $fillable = [
    //     'id',
    //     'dastination_name',
    //     'tittle',
    //     'description',
    //     'destination_image',
    //     'status',
    // ];

    
}
