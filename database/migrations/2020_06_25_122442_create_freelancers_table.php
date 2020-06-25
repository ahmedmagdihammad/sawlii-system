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
            $table->string('userid');
            $table->string('title');
            $table->string('level')->ENUM('B','M','z');
            $table->string('rating');
            $table->string('jobs');
            $table->string('services');
            $table->string('earning');
            $table->string('response');
            $table->string('skills');
            $table->string('languages');
            $table->string('categories');
            $table->string('video');
            $table->string('overview');
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
