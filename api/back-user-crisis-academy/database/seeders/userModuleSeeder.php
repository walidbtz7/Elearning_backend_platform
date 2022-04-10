<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class userModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_modules')->insert([
            'module_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('user_modules')->insert([
            'module_id' => 2,
            'user_id' => 1,
        ]);
        DB::table('user_modules')->insert([
            'module_id' => 3,
            'user_id' => 1,
        ]);
        DB::table('user_modules')->insert([
            'module_id' => 4,
            'user_id' => 1,
        ]);

    }
}
