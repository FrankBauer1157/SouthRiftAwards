<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteUserInfo extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'vote_user_info';

    // The attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
        'mac_address',
        // 'category_id',
        // 'contestant_id',
    ];

    // Disable automatic timestamps if you don't need them
    public $timestamps = false;  // Default is true

    // Optionally, you can define relationships here if needed
}
