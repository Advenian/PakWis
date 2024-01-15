<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }


    protected $table = 'travel_packages';

    protected $fillable = [
        'title',
        'slug',
        'location',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
        'about',
    ];
}
