<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skills')->delete();

        $data = [
            ['key' => 'title', 'value' => "I'm great in what I do and I'm loving it"],
            ['key' => 'descripsion', 'value' => 'In order to appear distinguished, you must possess secondary skills in addition to the basic ones in order to increase your creativity and high efficiency at work'],

            ['key' => 'skill-1', 'value' => 'OOP PHP'],
            ['key' => 'skill-2', 'value' => 'Algorithm & Data Structure'],
            ['key' => 'skill-3', 'value' => 'Clean Coad'],
            ['key' => 'skill-4', 'value' => 'Design Pattern'],

            ['key' => 'prog-1', 'value' => '95'],
            ['key' => 'prog-2', 'value' => '75'],
            ['key' => 'prog-3', 'value' => '85'],
            ['key' => 'prog-4', 'value' => '80'],

        ];

        DB::table('skills')->insert($data);
    }
}
