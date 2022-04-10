<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_chapters', function (Blueprint $table) {
            $table->id();
            $table->integer('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->integer('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->integer('numero');
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
        Schema::dropIfExists('section_chapters');
    }
}
