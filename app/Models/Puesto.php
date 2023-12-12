<?php

// app/Models/Puesto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'c3_puesto';
    protected $fillable = ['skill', 'descripcion', 'status'];
}

