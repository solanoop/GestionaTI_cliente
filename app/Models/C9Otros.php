<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C9Otros extends Model
{
    protected $table = 'c9_otros';

    protected $fillable = ['skill', 'descripcion', 'status'];
}