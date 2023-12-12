<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredBenefitTable extends Migration
{
    public function up()
    {
        Schema::create('required_benefit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_vacancies_id')->constrained('job_vacancies');
            $table->foreignId('benefits_id')->constrained('benefits');
            $table->timestamps();
            $table->tinyInteger('status')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('required_benefit');
    }
}
