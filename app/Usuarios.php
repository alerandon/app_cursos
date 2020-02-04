<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{
    Use Notifiable, HasRole;

    protected $fillable = ['id', 'nombre', 'contraseña', 'correo', 'rol'];
}
