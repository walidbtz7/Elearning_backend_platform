<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pathModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learning_path_modules')->insert([
           'numero'=> 1,
           'path_id'=> 1,
           'module_id'=> 1,
        ]);
        DB::table('learning_path_modules')->insert([
            'numero'=> 2,
            'path_id'=> 1,
            'module_id'=> 2,
         ]);
         DB::table('learning_path_modules')->insert([
            'numero'=> 3,
            'path_id'=> 2,
            'module_id'=> 3,
         ]);
         DB::table('learning_path_modules')->insert([
            'numero'=> 4,
            'path_id'=> 1,
            'module_id'=> 4,
         ]);
        //  DB::table('learning_path_modules')->insert([
        //     'numero'=> 5,
        //     'path_id'=> 2,
        //     'module_id'=> 5,
        //  ]);

        // DB::table('learning_path_modules')->insert([
        //     'numero'=> 6,
        //     'path_id'=> 2,
        //     'module_id'=> 6,
        // ]);
}
}
