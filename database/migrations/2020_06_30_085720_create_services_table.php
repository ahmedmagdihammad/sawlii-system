<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freelancer')->nullable();
            $table->string('title_en',256)->nullable();
            $table->string('title_ar',256)->nullable();
            $table->string('image',128)->nullable();
            $table->integer('category')->nullable();
            $table->integer('subcategory')->nullable();
            $table->integer('days')->nullable();
            $table->integer('price')->nullable();
            $table->string('description_en',256)->nullable();
            $table->string('description_ar',256)->nullable();
            $table->string('details_en',256)->nullable();
            $table->string('details_ar',256)->nullable();
            $table->integer('featured')->nullable();
            $table->integer('cost')->nullable();
            $table->enum('payment',['N','D'])->nullable();
            $table->enum('status',['N','D','R'])->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('services');
    }
}
