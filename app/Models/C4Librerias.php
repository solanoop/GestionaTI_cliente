<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C4Librerias extends Model
{
    protected $table = 'c4_librerias';

    protected $fillable = ['skill', 'descripcion', 'status'];
}