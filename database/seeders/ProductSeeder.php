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
        Product::create([
            'name'=>'Product 1',
            'description'=>'Description for Product 1'
        ]);
        Product::create([
            'name'=>'Product 2',
            'description'=>'Description for Product 2'
        ]);
    }
}
