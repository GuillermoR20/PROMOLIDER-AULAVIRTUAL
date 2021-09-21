<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_producers')->unsigned();
            $table->foreign('id_producers')->references('id')->on('producers');
            $table->bigInteger('id_categories')->unsigned();
            $table->foreign('id_categories')->references('id')->on('categories');
            $table->string('title', 50);
            $table->string('area', 20);
            $table->longText('description');
            $table->string('image', 255);
            $table->string('currency', 20);
            $table->double('price');
            $table->integer('ranking_by_user');
            $table->boolean('status');
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
        Schema::dropIfExists('courses');
    }
}
