<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freelancer');
            $table->integer('reviewer')->nullable();
            $table->enum('workType',['J','S'])->nullable();
            $table->integer('workID')->nullable();
            $table->enum('punctuality',['1','2','3','4','5'])->nullable();
            $table->enum('clarification',['1','2','3','4','5'])->nullable();
            $table->enum('communication',['1','2','3','4','5'])->nullable();
            $table->enum('quality',['1','2','3','4','5'])->nullable();
            $table->enum('expertise',['1','2','3','4','5'])->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
