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
            'tailor_id' => 1,
            'product_name' => 'Baju batik',
            'product_price' => 10000,
            'product_size' => 'XL',
            'product_desc' => 'Produk ini adalah batik',
            'product_image' => 'p1.jpg',
            'product_category' => 'Batik',
            'product_type' => 'Tipe 1',
            'product_material' => 'Bahan Kain',
        ]);
    }
}
