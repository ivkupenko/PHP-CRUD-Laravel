<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GendersSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\AttributesSeeder;
use Database\Seeders\AttributeValuesSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            GendersSeeder::class,
            UsersSeeder::class,
            ProductsSeeder::class,
            AttributesSeeder::class,
            AttributeValuesSeeder::class,
        ]);
    }
}
