<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStudyProgramIdToTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interna_timelines', function (Blueprint $table) {
            $table->unsignedBigInteger('study_program_id')->index()->after('id');
            $table->foreign('study_program_id')->references('id')->on('interna_study_programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interna_timelines', function (Blueprint $table) {
            $table->dropColumn('study_program_id');
        });
    }
}
