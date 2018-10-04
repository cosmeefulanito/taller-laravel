<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $fillable = ['nombre', 'resumen', 'npagina', 'edicion', 'autor', 'precio'];
}
