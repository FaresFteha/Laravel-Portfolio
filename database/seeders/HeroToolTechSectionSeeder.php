<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroToolTechSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hero_tool_teches')->delete();

        $data = [
            ['key' => 'tool-tech-1', 'value' => 'FrontEnd'],
            ['key' => 'tool-tech-2', 'value' => 'Laravel'],
            ['key' => 'tool-tech-3', 'value' => 'Vue.js'],
            ['key' => 'tool-tech-4', 'value' => ''],
        ];
        DB::table('hero_tool_teches')->insert($data);
    }
}
