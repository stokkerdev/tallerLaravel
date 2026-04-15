<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'recomended_age'
    ];


    public function cars()
    {
        return $this->hasMany(car::class, 'fk_categoria_id');
    }
}
