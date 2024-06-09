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
                "kategori_tumbuhan" => 'Bunga'
            ],
            [
                "kategori_tumbuhan" => 'Buah'
            ],
            [
                "kategori_tumbuhan" => 'Sayur'
            ]
        ];

        foreach ($data as $key => $value) {
            KategoriTumbuhan::create([
                'kategori_tumbuhan' => $value['kategori_tumbuhan']
            ]);
        };
    }
}
