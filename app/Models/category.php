<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
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
