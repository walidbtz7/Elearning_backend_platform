<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningPathModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_path_modules', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->integer('path_id')->references('id')->on('learning_paths')->onDelete('cascade');
            $table->integer('module_id')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::dropIfExists('learning_path_modules');
    }
}
