<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Est_Pedido extends Model
{
    protected $fillable = [
        'nombre','descripcion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
