<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c1_lenguajes_de_programacion', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c2_frameworks', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c3_puesto', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c4_librerias', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c5_bases_de_datos', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c6_herramientas_de_desarrollo', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c7_sistemas_de_control_de_versiones', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c8_gestion_de_proyectos_y_colaboracion', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });

        Schema::create('c9_otros', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('descripcion');
            $table->timestamps();
            $table->bigInteger('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c1_lenguajes_de_programacion');
        Schema::dropIfExists('c2_frameworks');
        Schema::dropIfExists('c3_puesto');
        Schema::dropIfExists('c4_librerias');
        Schema::dropIfExists('c5_bases_de_datos');
        Schema::dropIfExists('c6_herramientas_de_desarrollo');
        Schema::dropIfExists('c7_sistemas_de_control_de_versiones');
        Schema::dropIfExists('c8_gestion_de_proyectos_y_colaboracion');
        Schema::dropIfExists('c9_otros');
    }
}
