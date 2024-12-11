<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'contestant_id',
        'user_info_id',
        'category_id',
    ];

    // Relationship with the Contestant
    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    // Relationship with the Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
