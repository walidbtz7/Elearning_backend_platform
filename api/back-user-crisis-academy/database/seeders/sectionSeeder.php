<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([

            'title'=> "course overview",
             'description'=> "course overview"


        ]);
        DB::table('sections')->insert([

           'title'=> "Getting started with angular",
           'description'=> "Getting started with angular"


      ]);
        DB::table('sections')->insert([

            'title'=> "Greating and communicating between angular Components",
        'description'=> "Greating and communicating between angular Components"


        ]);
        DB::table('sections')->insert([

            'title'=> "Exploring the angular template Syntax ",
            'description'=> "Exploring the angular template Syntax "


        ]);
    }
}
