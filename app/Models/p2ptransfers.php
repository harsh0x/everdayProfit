<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P2pTransfer extends Model
{
    protected $fillable = [
        'from_user', 'to_user', 'amount', 'status',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user', 'id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user', 'id');
    }

    // You can add other relationships or methods as needed
}