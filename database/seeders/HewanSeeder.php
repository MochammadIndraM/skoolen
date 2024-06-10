<?php

namespace Database\Seeders;

use App\Models\Hewan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "id_kategori_hewan" => '4',
                "nama_hewan" => 'Kucing',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '2',
                "nama_hewan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '1',
                "nama_hewan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '3',
                "nama_hewan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '5',
                "nama_hewan" => 'Badak',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '4',
                "nama_hewan" => 'Kucing',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '2',
                "nama_hewan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '1',
                "nama_hewan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '3',
                "nama_hewan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '5',
                "nama_hewan" => 'Badak',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '4',
                "nama_hewan" => 'Kucing',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '2',
                "nama_hewan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '1',
                "nama_hewan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '3',
                "nama_hewan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '5',
                "nama_hewan" => 'Badak',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '4',
                "nama_hewan" => 'Kucing',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '2',
                "nama_hewan" => 'Nyambek',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '1',
                "nama_hewan" => 'Rusa',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '3',
                "nama_hewan" => 'Ayam',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
            [
                "id_kategori_hewan" => '5',
                "nama_hewan" => 'Badak',
                "deskripsi" => 'Kucing adalah mamalia yang paling populer di dunia.',
                "gambar" => 'kucing.jpg'
            ],
        ];

        foreach ($data as $key => $value) {
            Hewan::create([
                'id_kategori_hewan' => $value['id_kategori_hewan'],
                'nama_hewan' => $value['nama_hewan'],
                'deskripsi' => $value['deskripsi'],
                'gambar' => $value['gambar']
            ]);
        };
    }
};
