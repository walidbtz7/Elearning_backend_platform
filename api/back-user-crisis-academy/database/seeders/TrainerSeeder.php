<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'username' => "panglos",
            'email' => "panglos@gmail.com",
            'password' => encrypt("walidbtz7"),
            'function' => "I'm a developer web",
            'about' => "bla bla bla bla bla bla bla bla ",

            ]);
    }
}
