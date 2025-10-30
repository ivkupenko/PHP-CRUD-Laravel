<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Wireless Mouse', 'description' => 'Ergonomic mouse with 2.4G connection', 'count' => 120],
            ['name' => 'Mechanical Keyboard', 'description' => 'RGB backlit mechanical keyboard', 'count' => 75],
            ['name' => 'Bluetooth Headphones', 'description' => 'Noise-cancelling over-ear headphones', 'count' => 45],
            ['name' => 'Laptop Stand', 'description' => 'Adjustable aluminum stand for laptops', 'count' => 60],
            ['name' => 'USB-C Hub', 'description' => '7-in-1 USB-C hub with HDMI and card reader', 'count' => 150],
            ['name' => 'Gaming Monitor', 'description' => '27-inch 144Hz Full HD gaming display', 'count' => 20],
            ['name' => 'External SSD', 'description' => '1TB portable solid state drive, USB 3.2', 'count' => 35],
            ['name' => 'Smart LED Bulb', 'description' => 'Wi-Fi bulb with adjustable brightness and color', 'count' => 200],
            ['name' => 'Portable Speaker', 'description' => 'Waterproof Bluetooth speaker with deep bass', 'count' => 80],
            ['name' => 'Wireless Charger', 'description' => '15W fast wireless charger for smartphones', 'count' => 110],
            ['name' => 'Webcam HD', 'description' => '1080p webcam with built-in microphone', 'count' => 90],
            ['name' => 'Smart Watch', 'description' => 'Fitness tracker with heart rate monitor', 'count' => 55],
            ['name' => 'Desk Lamp', 'description' => 'LED desk lamp with touch dimmer', 'count' => 140],
            ['name' => 'Power Bank', 'description' => '10000mAh fast-charging portable power bank', 'count' => 130],
            ['name' => 'Noise Cancelling Earbuds', 'description' => 'Compact wireless earbuds with case', 'count' => 75],
        ]);
    }
}
