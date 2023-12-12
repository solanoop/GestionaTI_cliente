<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C6HerramientasDeDesarrollo extends Model
{
    protected $table = 'c6_herramientas_de_desarrollo';

    protected $fillable = ['skill', 'descripcion', 'status'];
}