<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hero_sections')->delete();

        $data = [
            ['key' => 'First_Name', 'value' => 'Fares'],
            ['key' => 'Last_Name', 'value' => 'Fteha'],
            ['key' => 'photo', 'value' => 'Fares.jpg'],
        ];
        DB::table('hero_sections')->insert($data);
    }
}
