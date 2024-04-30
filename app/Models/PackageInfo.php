<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageInfo extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'packagename',
    //     'packagetrip',
    //     'packagecost',
    //     'description',
    //     'packageimage',
    //     'status',
    // ];
    
    public function destination(): BelongsTo{

        return $this->belongsTo(DestinationInfo::class, 'destination_info_id');
    }
}
