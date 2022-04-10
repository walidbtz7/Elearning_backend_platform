<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_modules', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->integer('note');
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
        Schema::dropIfExists('rating_modules');
    }
}
