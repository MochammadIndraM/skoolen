<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cuaca;
use App\Models\Tumbuhan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KategoriHewanSeeder::class);
        $this->call(KategoriTumbuhanSeeder::class);
        $this->call(HewanSeeder::class);
        $this->call(TumbuhanSeeder::class);
        $this->call(AbjadSeeder::class);
        $this->call(CuacaSeeder::class);
        $this->call(AngkaSeeder::class);
    }
}
