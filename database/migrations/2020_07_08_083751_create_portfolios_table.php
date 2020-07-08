<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freelancer');
            $table->string('image',64)->nullable();
            $table->string('title',64)->nullable();
            $table->enum('duration',['1day','1week','1to2weeks','3to4weeks','1to6months','plus6months'])->nullable();
            $table->json('skills')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
