<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(KategoriHewanSeeder::class);
        // $this->call(KategoriTumbuhanSeeder::class);
        $this->call(HewanSeeder::class);
    }
}
