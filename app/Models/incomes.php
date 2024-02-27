<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'income_to', 'income_from', 'income_type', 'amount', 'status',
    ];

    public function incomeTo()
    {
        return $this->belongsTo(User::class, 'income_to', 'id');
    }

    public function incomeFrom()
    {
        return $this->belongsTo(User::class, 'income_from', 'id');
    }

    // You can add other relationships or methods as needed
}