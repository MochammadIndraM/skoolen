<?php

namespace Database\Seeders;

use App\Models\Cuaca;
use App\Models\Hewan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => 'pelangi',
                "nama_cuaca" => "Pelangi",
                "icon" => "pelangi.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "Oms8uMNN4jg?si=4dN4FBum5L29CpGf",
            ],
            [
                "slug" => 'hujan',
                "nama_cuaca" => "Hujan",
                "icon" => "hujan.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "JQjDFhKc9hQ?si=0Az_bvm_eRE1fFAY",
            ],
            [
                "slug" => 'petir',
                "nama_cuaca" => "Petir",
                "icon" => "petir.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "x-cb3C6ZyII?si=OddHWP8pa4QgcP5h",
            ],
            [
                "slug" => 'cerah',
                "nama_cuaca" => "Cerah",
                "icon" => "cerah.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "zfYT2DRl8BU?si=Zt8IBpb_0M4Wszva",
            ],
            [
                "slug" => 'dingin',
                "nama_cuaca" => "Dingin",
                "icon" => "dingin.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "txHKjGTgA4g?si=SCORub_bbsFwwOw6",
            ],
            [
                "slug" => 'panas',
                "nama_cuaca" => "Panas",
                "icon" => "panas.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "kyqy6XiqWx4?si=a_wyiTA1wwedzHPR",
            ],
            [
                "slug" => 'mendung',
                "nama_cuaca" => "Mendung",
                "icon" => "mendung.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "YdE8gxSKfXk?si=Gxo37ZHbNuU47vU-",
            ],
            [
                "slug" => 'berangin',
                "nama_cuaca" => "Berangin",
                "icon" => "berangin.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur.",
                "video_id" => "NyXonVgm0bg?si=ycOt0pPV0XGAKMY-",
            ],
        ];

        foreach ($data as $key => $value) {
            Cuaca::create($value);
        };
    }
};
