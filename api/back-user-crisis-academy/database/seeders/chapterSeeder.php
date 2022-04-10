<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class chapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([

            'title' => 'Introduction',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
        DB::table('chapters')->insert([

            'title' => 'Routing',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
        DB::table('chapters')->insert([

            'title' => 'middleware',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
        DB::table('chapters')->insert([

            'title' => 'controllers',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
        DB::table('chapters')->insert([

            'title' => 'sendig Emails',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
        DB::table('chapters')->insert([

            'title' => 'api',
            'video_id' => '1',
            'is_aproved' => true,
            'duration' => '20h',

        ]);
    }
}
