<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->nullable();
            $table->string('title',128)->nullable();
            $table->enum('level',['B','M','Z'])->nullable();
            $table->float('rating')->nullable();
            $table->integer('jobs')->nullable();
            $table->integer('services')->nullable();
            $table->float('earning')->nullable();
            $table->integer('response')->nullable();
            $table->string('skills',1024)->nullable();
            $table->json('languages')->nullable();
            $table->string('categories',512)->nullable();
            $table->string('video',128)->nullable();
            $table->string('overview',2048)->nullable();
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
        Schema::dropIfExists('freelancers');
    }
}
