<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LearningPathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learning_paths')->insert([
            'title' => "Dev Ops",
            'description' => "dev ops description",
            'niveau' => "easy",
            'logo' => 'devops',
            'grained_points' => 20,
            'is_premium' => 1,


        ]);
        DB::table('learning_paths')->insert([
            'title' => "blockchaine",
            'description' => "blockchaine description",
            'niveau' => "easy",
            'logo' => 'blockchain',
            'grained_points' => 20,
            'is_premium' => 1,


        ]);

        DB::table('learning_paths')->insert([
            'title' => "web dev",
            'description' => "dev description",
            'niveau' => "easy",
            'logo' => 'typescript',
            'grained_points' => 20,
            'is_premium' => 1,


        ]);
        DB::table('learning_paths')->insert([
            'title' => "Network",
            'description' => "Network description",
            'niveau' => "easy",
            'logo' => 'angular',
            'grained_points' => 20,
            'is_premium' => 1,
        ]);
        DB::table('learning_paths')->insert([
            'title' => "WordPress",
            'description' => "wordpress description",
            'niveau' => "easy",
            'logo' => 'wordpress',
            'grained_points' => 20,
            'is_premium' => 1,
        ]);
        DB::table('learning_paths')->insert([
            'title' => "react",
            'description' => "react description",
            'niveau' => "easy",
            'logo' => 'react',
            'grained_points' => 20,
            'is_premium' => 1,
        ]);

    }
}
