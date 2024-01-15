<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transactions_id',
        'nationality',
        'is_visa',
        'doe_passport',
    ];

    // Define a many-to-one relationship with the Transaction model
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id');
    }
}
