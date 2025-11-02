<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute;

class AttributesSeeder extends Seeder
{
    public function run(): void
    {
        $attributes = ['color', 'material', 'size'];

        foreach ($attributes as $attr) {
            Attribute::firstOrCreate(['name' => strtolower($attr)]);
        }
    }
}
