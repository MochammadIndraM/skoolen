<?php

namespace Database\Seeders;

use App\Models\KategoriHewan;
use Illuminate\Database\Seeder;

class KategoriHewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "kategori_hewan" => 'Amfibi',
                "slug" => "amfibi",
                "gambar" => "amfibi.png"
            ],
            [
                "id" => 2,
                "kategori_hewan" => 'Ikan',
                "slug" => "ikan",
                "gambar" => "ikan.png"
            ],
            [
                "id" => 3,
                "kategori_hewan" => 'Burung',
                "slug" => "burung",
                "gambar" => "burung.png",
            ],
            [
                "id" => 4,
                "kategori_hewan" => 'Reptil',
                "slug" => "reptil",
                "gambar" => "reptil.png",
            ],
            [
                "id" => 5,
                "kategori_hewan" => 'Mamalia',
                "slug" => "mamalia",
                "gambar" => "mamalia.png"
            ]
        ];

        foreach ($data as $value) {
            KategoriHewan::create($value);
        }

    }
}
