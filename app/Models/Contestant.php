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

    // Relationship with the Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Votes
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
