<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'dpi', 'primerNombre', 'segundoNombre', 'tercerNombre', 'primerApellido', 'segundoApellido', 'apellidoCasado', 'fechaNacimiento',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
}
