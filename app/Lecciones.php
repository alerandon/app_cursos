<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecciones extends Model
{
    protected $fillable = ['id', 'curso_id', 'leccion', 'descripcion'];
}
