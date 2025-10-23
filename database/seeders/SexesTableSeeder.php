<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sexes')->insert([
            ['id' => 0, 'sex' => 'male'],
            ['id' => 1, 'sex' => 'female'],
        ]);
    }
}
