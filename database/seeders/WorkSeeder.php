<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //
         DB::table('works')->delete();

         $data = [
             ['key' => 'title', 'value' => 'Best result with top user experience'],
             ['key' => 'descripsion', 'value' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eureh lit anim id est laborum.'],
 
             ['key' => 'icone-1', 'value' => 'Front-end developer'],
             ['key' => 'icone-2', 'value' => 'Web-Developer'],
             ['key' => 'icone-3', 'value' => 'Live-wire'],
 
             ['key' => 'title-icone-1', 'value' => 'ASD'],
             ['key' => 'title-icone-2', 'value' => 'ASD'],
             ['key' => 'title-icone-3', 'value' => 'ASD'],

             ['key' => 'descripsion-title-1', 'value' => 'ASD'],
             ['key' => 'descripsion-title-2', 'value' => 'ASD'],
             ['key' => 'descripsion-title-3', 'value' => 'ASD'],

             ['key' => 'photo', 'value' => 'asd.jpj'],

         ];
 
         DB::table('works')->insert($data);
    }
}
