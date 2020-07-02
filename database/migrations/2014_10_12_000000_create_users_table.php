<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',128);
            $table->string('lastname',128);
            $table->string('location',128);
            $table->string('username',128);
            $table->string('email',128)->unique();
            $table->string('password',128);
            $table->enum('type',['F','C','A']);
            $table->date('date')->nullable();
            $table->datetime('lastLogin')->nullable();
            $table->enum('verifay',[0,1])->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
