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
            $table->string('departmentId');
            $table->string('name');
            $table->integer('years')->default(2020);
            $table->date('birthdate')->nullable();
            $table->string('city');
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->timestamps();

            $table->foreign('departmentId')->references('code')->on('departments');
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
