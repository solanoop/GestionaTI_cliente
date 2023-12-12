<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C5BasesDeDatos extends Model
{
    protected $table = 'c5_bases_de_datos';

    protected $fillable = ['skill', 'descripcion', 'status'];
}