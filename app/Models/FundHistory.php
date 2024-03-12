<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundHistory extends Model
{
    use HasFactory;

    

    // Set the table name
    protected $table = 'users';

    // Your model logic, if needed
    // Fillable fields for mass assignment
    protected $fillable = [
        'username', 'name', 'email', 'mobile', 'password', 'password1', 'referral_id',
        'status', 'fund_wallet', 'wallet_balance', 'self_invested', 'is_admin', 'direct_team', 'total_income', // you can use this to differentiate between deposits and withdrawals
        // add other fields as needed
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
