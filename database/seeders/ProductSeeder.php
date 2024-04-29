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
        Product::create([
            'name' => 'Video Beam',
            'description' => 'Video Beam',
            'stock' => 5,
            'state' => 'Usado',
        ]);
        Product::create([
            'name' => 'Computador portátil',
            'description' => 'Computador portátil',
            'stock' => 4,
            'state' => 'Usado',
        ]);
        Product::create([
            'name' => 'Kit parlantes',
            'description' => 'Parlantes con bajo y bocinas',
            'stock' => 3,
            'state' => 'Usado',
        ]);
    }
}
