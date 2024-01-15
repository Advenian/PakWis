<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'travel_packages_id',
        'users_id',
        'additional_visa',
        'transaction_total',
        'transaction_status',
        'image',
    ];

    // Define relationships
    public function travelPackage()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
