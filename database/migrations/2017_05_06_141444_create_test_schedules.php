<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sv_id', 20);
            $table->foreign('sv_id')->references('sv_id')->on('info_students');
            $table->integer('sbd')->unsigned();
            $table->string('mlh_id', 20);
            $table->foreign('mlh_id')->references('mlh_id')->on('info_class');
            $table->string('type', 20)->default('Viết');
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
        Schema::dropIfExists('test_schedule');
    }
}
