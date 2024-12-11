<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function nominations()
{
    return $this->hasMany(related: Nomination::class);

}
public function contestants()
    {
        return $this->hasMany(Contestant::class); // Define a one-to-many relationship
    }

}

