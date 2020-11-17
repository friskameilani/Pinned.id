<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TailorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tailors')->insert([
            'tailor_name' => 'Agus',
            'tailor_desc' => 'Saya adalah tukang jahit',
            'tailor_contact' => '0852631728255',
            'tailor_address' => 'Jalan Pemuda',
        ]);
    }
}
