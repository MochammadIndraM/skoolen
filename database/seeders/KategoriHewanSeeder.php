<?php

namespace Database\Seeders;

use App\Models\KategoriHewan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                "kategori_hewan" => 'Amfibi'
            ],
            [
                "kategori_hewan" => 'Ikan'
            ],
            [
                "kategori_hewan" => 'Burung'
            ],
            [
                "kategori_hewan" => 'Reptil'
            ],
            [
                "kategori_hewan" => 'Mamalia'
            ]
        ];

        foreach ($data as $key => $value) {
            KategoriHewan::create([
                'kategori_hewan' => $value['kategori_hewan']
            ]);
        };
    }
};
