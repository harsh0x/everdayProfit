<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    protected $fillable = [
        'username', 'name', 'email', 'mobile', 'password', 'password1', 'referral_id',
        'status', 'fund_wallet', 'wallet_balance', 'self_invested', 'is_admin', 'direct_team', 'total_income',
    ];

    // public function referrer()
    // {
    //     return $this->belongsTo(User::class, 'referrer_id');
    // }

    // Add other relationships or methods as needed
}
