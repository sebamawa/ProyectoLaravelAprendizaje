<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'document', 'phone', 'address'
    ];

    public $timestamps = false; //removido en la migracion
}
