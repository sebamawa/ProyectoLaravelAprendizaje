<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //campos para form (campos de tabla productos)
    protected $fillable = [
        'descripcion', 'imagen', 'precio'
    ];

    //no considera campos created_at y updated_at de la bd
    public $timestamps = false;
}
