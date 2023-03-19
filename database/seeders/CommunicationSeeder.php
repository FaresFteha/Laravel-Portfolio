<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommunicationSeeder extends Seeder
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
         DB::table('communications')->delete();

         $data = [
             ['key' => 'Address', 'value' => 'Palestine - Gaza'],
             ['key' => 'Phone', 'value' => '+972597107791'],
             ['key' => 'Email', 'value' => 'faresfteha21@gmail.com'],
         ];
         DB::table('communications')->insert($data);
    }
}
