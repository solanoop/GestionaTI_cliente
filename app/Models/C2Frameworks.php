<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C2Frameworks extends Model
{
    protected $table = 'c2_frameworks';

    protected $fillable = ['skill', 'descripcion', 'status'];
}