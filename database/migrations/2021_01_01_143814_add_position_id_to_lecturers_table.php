<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionIdToLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interna_lecturers', function (Blueprint $table) {
            $table->unsignedBigInteger('position_id')->index()->after('id');
            $table->foreign('position_id')->references('id')->on('interna_positions')->onDelete('cascade');
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
            $table->dropColumn('position_id');
        });
    }
}
