<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = ['id', 'especializacion_id', 'curso'];
}
