<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    use HasFactory;

    // protected $fillable = ['category_id', 'name', 'reason'];
    protected $fillable = ['category_id', 'name', 'reason', 'ip_address', 'location','ip_address','user_agent'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
