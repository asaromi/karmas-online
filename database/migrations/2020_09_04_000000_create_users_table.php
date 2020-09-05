<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('nim')->unique();
            $table->unsignedBigInteger('departmentId');
            $table->unsignedBigInteger('degreeId');
            $table->string('name');
            $table->integer('years');
            $table->date('birthdate');
            $table->string('city');
            $table->string('password');
            $table->string('avatar')->default('anu.jpg');
            $table->timestamps();

            $table->foreign('departmentId')->references('id')->on('departments');
            $table->foreign('degreeId')->references('id')->on('degrees');
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
