<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('codigo');
            $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained('teacher')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
