<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateSportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->delete();
        DB::table('sports')->insert([[
            'name' => 'Football',
        ],[
            'name' => 'Basketball',
        ], [
            'name' => 'Volleyball',
        ]]);
    }
}
