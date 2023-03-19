<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroIconSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hero_icons')->delete();

        $data = [
            ['key' => 'Icon-1', 'value' => 'fab fa-laravel'],
            ['key' => 'Icon-2', 'value' => 'fas fa-database'],
            ['key' => 'Icon-3', 'value' => 'fa-brands fa-vuejs'],
            ['key' => 'Icon-4', 'value' => 'fab fa-git-alt'],
        ];
        DB::table('hero_icons')->insert($data);
    }
}
