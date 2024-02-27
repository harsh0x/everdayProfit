<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanActivation extends Model
{
    protected $fillable = [
        'username', 'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    // You can add other relationships or methods as needed
}
