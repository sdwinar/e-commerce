<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product = Product::create([
            'name' => 'Luxurious Watch',
            'slug' => 'Luxurious Watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistance</li><li><i class="icofont-check"></i> Movement Button</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
            'image_name' => 'watch-3.png',
            'price' => 120,
            'sale_price' => 100,
        ]);
        $product = Product::create([
            'name' => 'Luxurious Watch 2',
            'slug' => 'Luxurious Watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistance</li><li><i class="icofont-check"></i> Movement Button</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
            'image_name' => 'watch-1.png',
            'price' => 500,
            'sale_price' => 400,
        ]);
        $product = Product::create([
            'name' => 'Luxurious Watch 3',
            'slug' => 'Luxurious Watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistance</li><li><i class="icofont-check"></i> Movement Button</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
            'image_name' => 'watch-4.png',
            'price' => 900,
            'sale_price' => 750,
        ]);
        $product = Product::create([
            'name' => 'Luxurious Watch 4',
            'slug' => 'Luxurious Watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistance</li><li><i class="icofont-check"></i> Movement Button</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
            'image_name' => 'watch-2.png',
            'price' => 1200,
            'sale_price' => 900,
        ]);

        
        
        
    }
}
