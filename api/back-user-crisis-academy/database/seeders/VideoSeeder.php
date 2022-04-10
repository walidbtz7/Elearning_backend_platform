<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('sections')->insert([
         'url' => "https://www.youtube.com/watch?v=NPvjiYeLfVw",
         'duration' =>"20h",
         'is_trailer'=>true,
        ]);
    }
}
