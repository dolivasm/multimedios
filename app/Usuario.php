<?php

namespace Multimedios;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
       protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
