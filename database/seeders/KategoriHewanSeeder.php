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
                "kategori_hewan" => 'Amfibi',
                "slug" => "amfibi",
                "gambar" => "amfibi.png"
            ],
            [
                "kategori_hewan" => 'Ikan',
                "slug" => "ikan",
                "gambar" => "ikan.png"
            ],
            [
                "kategori_hewan" => 'Burung',
                "slug" => "burung",
                "gambar" => "burung.png",
            ],
            [
                "kategori_hewan" => 'Reptil',
                "slug" => "reptil",
                "gambar" => "reptil.png",
            ],
            [
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
