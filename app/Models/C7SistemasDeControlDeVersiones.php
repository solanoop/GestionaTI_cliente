<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C7SistemasDeControlDeVersiones extends Model
{
    protected $table = 'c7_sistemas_de_control_de_versiones';

    protected $fillable = ['skill', 'descripcion', 'status'];
}