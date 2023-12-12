<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'c1_lenguajes_de_programacion_id',
        'c2_frameworks_id',
        'c3_puesto_id',
        'c4_librerias_id',
        'c5_bases_de_datos_id',
        'c6_herramientas_de_desarrollo_id',
        'c7_sistemas_de_control_de_versiones_id',
        'c8_gestion_de_proyectos_y_colaboracion_id',
        'c9_otros_id',
        'benefits_id',
        'languages_id',
        'level_id',
        'location_id',
        'working_modality_id',
        'title',
        'details',
        'responsibility',
        'functions',
        'years_experience',
        'perfil',
        'academic_requirements',
        'salary_range',
        'hiring_time',
        'created_at',
        'updated_at',
        'status',
    ];
}
