<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interna_lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nidn')->unique();
            $table->string('nip')->unique();
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('line_account')->unique();
            $table->string('phone')->unique();
            $table->text('description')->nullable();
            $table->text('photo')->nullable();
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
        Schema::dropIfExists('interna_lecturers');
    }
}
