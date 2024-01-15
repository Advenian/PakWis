<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_packages_id',
        'image',
    ];

    // Define a many-to-one relationship with the TravelPackage model
    public function travelPackage()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id');
    }
}
