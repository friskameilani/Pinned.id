<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);    
         $this->call(TailorSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(FAQSeeder::class);
         $this->call(AdminSeeder::class);
    }
}
