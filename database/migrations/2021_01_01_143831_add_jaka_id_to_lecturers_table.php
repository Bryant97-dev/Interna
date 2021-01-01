<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJakaIdToLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interna_lecturers', function (Blueprint $table) {
            $table->unsignedBigInteger('jaka_id')->index()->after('id');
            $table->foreign('jaka_id')->references('id')->on('interna_jakas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interna_lecturers', function (Blueprint $table) {
            $table->dropColumn('jaka_id');
        });
    }
}
