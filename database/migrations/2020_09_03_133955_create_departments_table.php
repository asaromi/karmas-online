<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->unsignedBigInteger('facultyId');
            $table->unsignedBigInteger('degreeId');
            $table->string('name');
            $table->timestamps();

            $table->foreign('facultyId')->references('id')->on('faculties');
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
        Schema::dropIfExists('departments');
    }
}
