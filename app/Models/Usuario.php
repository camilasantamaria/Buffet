<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
protected $fillable = [
    'nombre', 'apellido', 'numero','correo','usuario','password',
];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [
    'password', 'remember_token',
];
public  function tipo_documento(){
    return $this->belongsTo(TipoDocumento::class);
}
}
