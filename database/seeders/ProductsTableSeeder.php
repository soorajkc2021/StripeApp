<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 12',
                'price' => 799.00,
                'description' => 'Apple iPhone 12 with A14 Bionic chip, 6.1-inch display, and dual-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'price' => 699.99,
                'description' => 'Samsung Galaxy S21 with Exynos 2100, 6.2-inch display, and triple-camera setup.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Google Pixel 5',
                'price' => 699.00,
                'description' => 'Google Pixel 5 with Snapdragon 765G, 6.0-inch display, and dual-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'OnePlus 8T',
                'price' => 599.00,
                'description' => 'OnePlus 8T with Snapdragon 865, 6.55-inch display, and quad-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sony Xperia 1 II',
                'price' => 1199.99,
                'description' => 'Sony Xperia 1 II with Snapdragon 865, 6.5-inch 4K HDR display, and triple-camera setup.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'LG V60 ThinQ',
                'price' => 799.99,
                'description' => 'LG V60 ThinQ with Snapdragon 865, 6.8-inch display, and dual-screen accessory.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Xiaomi Mi 11',
                'price' => 749.00,
                'description' => 'Xiaomi Mi 11 with Snapdragon 888, 6.81-inch display, and triple-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Huawei P40 Pro',
                'price' => 899.99,
                'description' => 'Huawei P40 Pro with Kirin 990, 6.58-inch display, and quad-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Oppo Find X3 Pro',
                'price' => 1099.00,
                'description' => 'Oppo Find X3 Pro with Snapdragon 888, 6.7-inch display, and quad-camera system.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Asus ROG Phone 5',
                'price' => 999.99,
                'description' => 'Asus ROG Phone 5 with Snapdragon 888, 6.78-inch display, and triple-camera setup.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

?>