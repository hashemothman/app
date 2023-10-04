<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name'         => 'Asus TUF',
                'price'        => '999.9',
                'desc'         => 'gaming laptop',
                'category_id'  => '1'
            ],
            [
                'name'         => 'samsung S8+',
                'price'        => '850.00',
                'desc'         => 'casual phone',
                'category_id'  => '2'
            ],
            [
                'name'         => 'whate to do ?',
                'price'        => '7.85',
                'desc'         => 'sovite book',
                'category_id'  => '3'
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
