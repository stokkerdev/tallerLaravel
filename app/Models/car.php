<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;



class car extends Model
{

    use HasFactory;
    protected $fillable = [
        'car_make',
        'car_model',
        'car_year',
        'car_price',
        'car_status',
        'fk_categoria_id',
        'barcode'
    ];

    function category()
    {
        return $this->belongsTo(category::class, 'fk_categoria_id');
    }

}
