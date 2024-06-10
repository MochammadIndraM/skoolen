<?php

namespace Database\Seeders;

use App\Models\KategoriTumbuhan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriTumbuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "kategori_tumbuhan" => 'Bunga',
                "slug" => "bunga",
                "gambar" => "bunga.png"
            ],
            [
                "id" => 2,
                "kategori_tumbuhan" => 'Buah',
                "slug" => "buah",
                "gambar" => "buah.png"
            ],
            [
                "id" => 3,
                "kategori_tumbuhan" => 'Sayur',
                "slug" => "sayur",
                "gambar" => "sayur.png",
            ],
        ];

        foreach ($data as $value) {
            KategoriTumbuhan::create($value);
        }
    }
}
