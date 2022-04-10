<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "walidbtz",
            'email' => "walidboutzougate@gmail.com",
            'password' => encrypt("walidbtz7"),

            ]);
    }
}
