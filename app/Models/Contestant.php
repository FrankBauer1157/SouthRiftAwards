<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
    ];

    // Inverse of the relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
