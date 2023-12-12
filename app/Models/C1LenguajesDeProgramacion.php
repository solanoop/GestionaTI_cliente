<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C1LenguajesDeProgramacion extends Model
{
    protected $table = 'c1_lenguajes_de_programacion';

    protected $fillable = ['skill', 'descripcion', 'status'];
}