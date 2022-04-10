<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->integer('lab_id')->references('id')->on('labs')->onDelete('cascade')->nullable();
            $table->boolean('is_aproved');
            $table->string('duration');
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
        Schema::dropIfExists('chapters');
    }
}
