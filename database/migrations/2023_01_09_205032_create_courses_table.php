<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id')->comment('Curso != Aula, un estudiante pertenece a distintos cursos pues cada curso refiere a una materia. Ej: Mat-6to A (Asignatura-Grado-Seccion)' );
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->string('grade');
            $table->string('section');
            $table->string('management');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
