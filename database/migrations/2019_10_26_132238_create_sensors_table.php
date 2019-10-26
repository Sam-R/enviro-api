<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->bigIncrements('id');
            // 5,2 is the best for any Earthly value
            // https://dba.stackexchange.com/questions/19614/best-mysql-field-type-for-temperatures
            $table->decimal("temperature", 5,2)->comment('c')->nullable();
            $table->decimal("pressure", 5,2)->comment('mPa')->nullable();
            $table->decimal("altitude", 5,2)->comment('m')->nullable();
            $table->integer("light")->nullable();
            $table->string("light_rgb")->nullable();
            $table->string("magnetometer")->nullable();
            $table->string("accelerometer")->nullable();
            $table->string("heading")->nullable();
            $table->string("raw_heading")->nullable();
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
        Schema::dropIfExists('sensors');
    }
}
