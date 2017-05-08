<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mlh_id', 20)->unique();
            $table->string('name_class', 191);
            $table->date('date_test')->nullable()->default(null);
            $table->tinyInteger('time_test')->nullable()->default(null)
                ->unsigned();
            $table->string('place_test', 20)->nullable()->default(null);
            $table->string('real_place', 20)->nullable()->default(null);
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
        Schema::dropIfExists('info_class');
    }
}
