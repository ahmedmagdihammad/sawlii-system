<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freelancer');
            $table->string('company',64)->nullable();
            $table->string('location',32)->nullable();
            $table->string('title',32)->nullable();
            $table->datetime('from')->nullable();
            $table->datetime('to')->nullable();
            $table->enum('current',['0','1'])->nullable();
            $table->string('description',512)->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
