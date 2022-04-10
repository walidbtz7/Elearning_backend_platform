<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class userPathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_paths')->insert([
            'path_id' => 1,
            'user_id' => 1,
            ]);
        DB::table('user_paths')->insert([
            'path_id' => 2,
            'user_id' => 1,
            ]);
        DB::table('user_paths')->insert([
            'path_id' => 3,
            'user_id' => 1,
            ]);
        DB::table('user_paths')->insert([
           'path_id' => 4,
           'user_id' => 1,
            ]);
        DB::table('user_paths')->insert([
          'path_id' => 5,
           'user_id' => 1,
             ]);
       DB::table('user_paths')->insert([
         'path_id' => 6,
          'user_id' => 1,
                   ]);
    }
}
