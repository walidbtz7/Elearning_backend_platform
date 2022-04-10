<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(ModuleSeeder::class);
        $this->call(LearningPathSeeder::class);
        $this->call(userSeeder::class);
        $this->call(userPathSeeder::class);
        $this->call(pathModulesSeeder::class);
        $this->call(sectionSeeder::class);
        $this->call(chapterSeeder::class);
        $this->call(sectionSeeder::class);
        $this->call(sectionChaptersSeeder::class);
        $this->call(ModulesectionsSeeder::class);
        $this->call(userModuleSeeder::class);
        $this->call(TrainerSeeder::class);


    }
}
