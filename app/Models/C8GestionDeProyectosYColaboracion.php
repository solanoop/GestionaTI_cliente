<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C8GestionDeProyectosYColaboracion extends Model
{
    protected $table = 'c8_gestion_de_proyectos_y_colaboracion';

    protected $fillable = ['skill', 'descripcion', 'status'];
}