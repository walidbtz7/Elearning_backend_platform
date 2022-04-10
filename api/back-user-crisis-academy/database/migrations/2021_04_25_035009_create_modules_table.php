<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->integer('trainer_id')->references('id')->on('trainers')->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->string('big_image');
            $table->boolean('new');
            $table->string('niveau');
            $table->integer('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->boolean('scope')->nullable();
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
        Schema::dropIfExists('modules');
    }
}
