<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sectionChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('section_chapters')->insert([
            'section_id'=> 1,
            'chapter_id'=> 1,
            'numero'=> 1,
         ]);
         DB::table('section_chapters')->insert([
            'section_id'=> 2,
            'chapter_id'=> 2,
            'numero'=> 1,
         ]);
         DB::table('section_chapters')->insert([
            'section_id'=> 2,
            'chapter_id'=> 3,
            'numero'=> 1,
         ]);
         DB::table('section_chapters')->insert([
            'section_id'=> 3,
            'chapter_id'=> 4,
            'numero'=> 1,
         ]);
         DB::table('section_chapters')->insert([
            'section_id'=> 3,
            'chapter_id'=> 5,
            'numero'=> 1,
         ]);
         DB::table('section_chapters')->insert([
            'section_id'=> 4,
            'chapter_id'=> 6,
            'numero'=> 1,
         ]);
}
}
