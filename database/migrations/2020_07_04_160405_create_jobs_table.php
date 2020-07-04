<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer');
            $table->string('title_en',128)->nullable();
            $table->string('title_ar',128)->nullable();
            $table->integer('category')->nullable();
            $table->integer('subcategory')->nullable();
            $table->enum('level',['B','M','X'])->nullable();
            $table->integer('Budget')->nullable();
            $table->string('description_en',256)->nullable();
            $table->string('description_ar',256)->nullable();
            $table->json('skills')->nullable();
            $table->date('deadline')->nullable();
            $table->string('duration',128)->nullable();
            $table->enum('public',[0,1])->nullable();
            $table->json('country')->nullable();
            $table->enum('hide',[0,1])->nullable();
            $table->integer('featured')->nullable();
            $table->integer('cost')->nullable();
            $table->json('files')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
