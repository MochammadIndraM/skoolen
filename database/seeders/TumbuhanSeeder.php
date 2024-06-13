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
                "id_kategori_tumbuhan" => '2',
                "nama_tumbuhan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '1',
                "nama_tumbuhan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '3',
                "nama_tumbuhan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],

            [
                "id_kategori_tumbuhan" => '2',
                "nama_tumbuhan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '1',
                "nama_tumbuhan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '3',
                "nama_tumbuhan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],

            [
                "id_kategori_tumbuhan" => '2',
                "nama_tumbuhan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '1',
                "nama_tumbuhan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '3',
                "nama_tumbuhan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '2',
                "nama_tumbuhan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '1',
                "nama_tumbuhan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_tumbuhan" => '3',
                "nama_tumbuhan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
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
