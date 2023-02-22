<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product' => 'iPhone 13 Pro',
            'description' => 'The iPhone 13 Pro is the most powerful iPhone ever. It features a 6.1-inch Super Retina XDR display, a 12MP triple camera system, and a 12MP TrueDepth front camera.',
            'variants' => '[
                {
                  "id": "iphone-13-blue",
                  "color": "blue",
                  "image": "./assets/images/iphone-13-blue.png",
                  "quantity": 3
                },
                {
                  "id": "iphone-13-midnight",
                  "color": "black",
                  "image": "./assets/images/iphone-13-midnight.png",
                  "quantity": 7
                },
                {
                  "id": "iphone-13-red",
                  "color": "red",
                  "image": "./assets/images/iphone-13-red.png",
                  "quantity": 0
                }
              ]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
