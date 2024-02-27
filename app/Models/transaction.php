<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'username', 'transaction_id', 'amount', 'currency', 'crypto_amount', 'address',
        'transaction_type', 'data', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    // You can add other relationships or methods as needed
}
