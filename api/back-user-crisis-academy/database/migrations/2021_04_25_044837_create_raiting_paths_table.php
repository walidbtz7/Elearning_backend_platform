<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaitingPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raiting_paths', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('path_id')->references('id')->on('learning_paths')->onDelete('cascade');
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
        Schema::dropIfExists('raiting_paths');
    }
}
