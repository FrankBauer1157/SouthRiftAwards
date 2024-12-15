<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuplicateVoter extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'mac_address',
        'user_agent',
        'user_id',
        'attempted_at',
        'country',
        'city' ,
        'region',
        'vote_count',
    ];
}
