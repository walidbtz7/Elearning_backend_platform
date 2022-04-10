<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module_sections')->insert([
            'module_id'=> 1,
            'section_id'=> 1,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 2,
            'section_id'=> 1,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 3,
            'section_id'=> 1,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 4,
            'section_id'=> 1,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 5,
            'section_id'=> 1,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 1,
            'section_id'=> 2,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 1,
            'section_id'=> 3,
         ]);
         DB::table('module_sections')->insert([
            'module_id'=> 1,
            'section_id'=> 4,
         ]);
    }
}
