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
        Product::create(["name"=>"Apple","description"=>"Apple is fruit","price"=>1.89]);
        Product::create(["name"=>"Orange","description"=>"Orange is fruit","price"=>1.39]);
        Product::create(["name"=>"Grape","description"=>"Grape is fruit","price"=>3.10]);
    }
}
