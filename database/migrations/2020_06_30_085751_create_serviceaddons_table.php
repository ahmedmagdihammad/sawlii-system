<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceaddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceaddons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service')->nullable();
            $table->string('title_en',128)->nullable();
            $table->string('title_ar',128)->nullable();
            $table->string('description_en',256)->nullable();
            $table->string('description_ar',256)->nullable();
            $table->integer('days')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('serviceaddons');
    }
}
