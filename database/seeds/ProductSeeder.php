<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            [
                'tailor_id' => 1,
                'product_name' => 'Baju batik',
                'product_price' => 10000,
                'product_size' => 'XL',
                'product_desc' => 'Produk ini adalah batik',
                'product_image' => 'p1.jpg',
                'product_category' => 'Batik',
                'product_type' => 'Tipe 1',
                'product_material' => 'Bahan Kain',
            ],
            [
                'tailor_id' => 2,
                'product_name' => 'Batik Tradisional',
                'product_price' => 70000,
                'product_size' => 'S',
                'product_desc' => 'Produk ini juga batik',
                'product_image' => 'p2.jpg',
                'product_category' => 'Batik',
                'product_type' => 'Tipe 2',
                'product_material' => 'Bahan Katun',
            ],
            [
                'tailor_id' => 1,
                'product_name' => 'Baju baru',
                'product_price' => 100000,
                'product_size' => 'L',
                'product_desc' => 'Produk ini baru',
                'product_image' => 'p3.jpg',
                'product_category' => 'Baru',
                'product_type' => 'Tipe 3',
                'product_material' => 'Bahan baru',
            ]
        ]);
    }
}
