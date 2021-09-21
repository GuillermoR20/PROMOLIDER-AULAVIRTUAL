<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_producers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_students')->unsigned();
            $table->foreign('id_students')->references('id')->on('students');
            $table->bigInteger('id_producers')->unsigned();
            $table->foreign('id_producers')->references('id')->on('producers');
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
        Schema::dropIfExists('students_producers');
    }
}
