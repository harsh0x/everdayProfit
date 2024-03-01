<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'username', 'name', 'email', 'mobile', 'password', 'password1',
       
    ];

    // public function referrer()
    // {
    //     return $this->belongsTo(User::class, 'referrer_id');
    // }

    // Add other relationships or methods as needed
}
