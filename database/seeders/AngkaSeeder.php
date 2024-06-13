<?php

namespace Database\Seeders;

use App\Models\Angka;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AngkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'angka' => 0,
                'deskripsi' => "nol",
                'img_angka' => "angka-0",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 1,
                'deskripsi' => "satu",
                'img_angka' => "angka-1",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 2,
                'deskripsi' => "dua",
                'img_angka' => "angka-2",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 3,
                'deskripsi' => "tiga",
                'img_angka' => "angka-3",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 4,
                'deskripsi' => "empat",
                'img_angka' => "angka-4",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 5,
                'deskripsi' => "lima",
                'img_angka' => "angka-5",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 6,
                'deskripsi' => "enam",
                'img_angka' => "angka-6",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 7,
                'deskripsi' => "tujuh",
                'img_angka' => "angka-7",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 8,
                'deskripsi' => "delapan",
                'img_angka' => "angka-8",
                'img_des' => "icon-mobil",
            ],
            [
                'angka' => 9,
                'deskripsi' => "sembilan",
                'img_angka' => "angka-9",
                'img_des' => "icon-mobil",
            ],
        ];

        foreach ($data as $key => $value) {
            Angka::create([
                'angka' => $value['angka'],
                'deskripsi' => $value['deskripsi'],
                'img_angka' => $value['img_angka'],
                'img_des' => $value['img_des'],
            ]);
        };
    }
}
