<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abouts')->delete();

        $data = [
            [
                'job_title' => 'Web-site Developer && Vue.js Developer',

                'descripsion' => 'specialize in designing and developing programs and I seek to get a
                full-time job in a reputable company and benefit from my creativity
                and innovative thinking. Working on different projects has allowed
                me to have a multi-use experience, which I use successfully in my
                work and I want to apply my innovative ideas, skills, and creativity
                to complete projects in this organization.',

                'name' => 'Fares Fteha',
                'age' => '22',
                'email' => 'faresfteha21@gmail.com',
                'phone_id' => 1,
                'education' => 'Bachloria',
                'freelance' => 'Available',
                'cv' => 'cv.pdf',
                'photo' => 'fares.pdf',

            ],
        ];
        DB::table('abouts')->insert($data);
    }
}
