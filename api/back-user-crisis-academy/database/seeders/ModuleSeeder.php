<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            'title' => "react",
            'trainer_id' => "1",
            'description' => "react freamwork javascript",
            'category_id' => 1,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);

        DB::table('modules')->insert([
            'title' => "Dev Ops",
            'trainer_id' => "1",
            'description' => "Dev Ops",
            'category_id' => 1,
            'big_image' => 'devops',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "WordPress",
            'trainer_id' => "1",
            'description' => "WordPress",
            'category_id' => 1,
            'big_image' => 'wordpress',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "vuejs",
            'trainer_id' => "1",
            'description' => "react freamwork javascript",
            'category_id' => 1,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "réseau bitcoin ",
            'trainer_id' => "1",
            'description' => "blockchain",
            'category_id' => 2,
            'big_image' => 'blockchain',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "Blockchain en entreprise",
            'trainer_id' => "1",
            'description' => "blockchain",
            'category_id' => 2,
            'big_image' => 'blockchain',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "blockchain",
            'trainer_id' => "1",
            'description' => "blockchain",
            'category_id' => 2,
            'big_image' => 'blockchain',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "blockchain",
            'trainer_id' => "1",
            'description' => "blockchain",
            'category_id' => 2,
            'big_image' => 'blockchain',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);

        DB::table('modules')->insert([
            'title' => "Cisco",
            'trainer_id' => "1",
            'description' => "network",
            'category_id' => 3,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        DB::table('modules')->insert([
            'title' => "scan network",
            'trainer_id' => "1",
            'description' => "network",
            'category_id' => 3,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
           DB::table('modules')->insert([
            'title' => "network",
            'trainer_id' => "1",
            'description' => "network",
            'category_id' => 3,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);    DB::table('modules')->insert([
            'title' => "network",
            'trainer_id' => "1",
            'description' => "network",
            'category_id' => 3,
            'big_image' => 'react',
            'scope'=>1,
            'new' => 1,
            'niveau' => "hard",
        ]);
        //categorie
        DB::table('categories')->insert([
            'title' => "dev web",

        ]);
        DB::table('categories')->insert([
            'title' => "blockchain",

        ]);
        DB::table('categories')->insert([
            'title' => "network",

        ]);
    }
}
