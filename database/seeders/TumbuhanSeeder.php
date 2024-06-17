<?php

namespace Database\Seeders;

use App\Models\Tumbuhan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TumbuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id_kategori_tumbuhan" => '1',
                "nama_tumbuhan" => 'Bunga Mawar',
                "deskripsi" => 'Bunga Mawar',
                "gambar" => 'mawar.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '2',
                "nama_tumbuhan" => 'Buah Apel',
                "deskripsi" => 'Apel',
                "gambar" => 'mawar.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '3',
                "nama_tumbuhan" => 'Tomat',
                "deskripsi" => 'Tomat',
                "gambar" => 'mawar.jpg'
            ],
        ];

        foreach ($data as $key => $value) {
            Tumbuhan::create([
                'id_kategori_tumbuhan' => $value['id_kategori_tumbuhan'],
                'nama_tumbuhan' => $value['nama_tumbuhan'],
                'deskripsi' => $value['deskripsi'],
                'gambar' => $value['gambar']
            ]);
        };
    }
};
