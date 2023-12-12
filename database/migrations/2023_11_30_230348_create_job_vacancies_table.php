<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('c1_lenguajes_de_programacion_id')->constrained('c1_lenguajes_de_programacion');
            $table->foreignId('c2_frameworks_id')->constrained('c2_frameworks');
            $table->foreignId('c3_puesto_id')->constrained('c3_puesto');
            $table->foreignId('c4_librerias_id')->constrained('c4_librerias');
            $table->foreignId('c5_bases_de_datos_id')->constrained('c5_bases_de_datos');
            $table->foreignId('c6_herramientas_de_desarrollo_id')->constrained('c6_herramientas_de_desarrollo');
            $table->foreignId('c7_sistemas_de_control_de_versiones_id')->constrained('c7_sistemas_de_control_de_versiones');
            $table->foreignId('c8_gestion_de_proyectos_y_colaboracion_id')->constrained('c8_gestion_de_proyectos_y_colaboracion');
            $table->foreignId('c9_otros_id')->constrained('c9_otros');
            $table->string('title', 100);
            $table->string('details', 600);
            $table->string('responsibility', 600);
            $table->string('functions', 600);
            $table->foreignId('positions_id')->constrained('positions');
            $table->foreignId('languages_id')->constrained('languages');
            $table->string('years_experience', 2);
            $table->foreignId('level_id')->constrained('level');
            $table->foreignId('working_modality_id')->constrained('working_modality');
            $table->foreignId('location_id')->constrained('location');
            $table->string('salary_min', 100);
            $table->string('salary_max', 100);
            $table->string('hiring_min', 100);
            $table->string('hiring_max', 100);
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_vacancies');
    }
}
