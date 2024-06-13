<?php

namespace Database\Seeders;

use App\Models\Langit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => 'bumi',
                "list_langit" => "Bumi",
                "icon" => "bumi.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "5JlfuofAY3o?si=yy9BZo1qdPf6E9O5",
            ],
            [
                "slug" => 'saturnus',
                "list_langit" => "Saturnus",
                "icon" => "saturnus.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "SJm55F8mYlA?si=S8Z6VeLpt-GYrzG6",
            ],
            [
                "slug" => 'meteor',
                "list_langit" => "Meteor",
                "icon" => "Meteor.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "ra8K69-NC60?si=iA7tCLIJFHJs0c-n",
            ],
            [
                "slug" => 'roket',
                "list_langit" => "Roket",
                "icon" => "roket.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "Exu7Hr-63AY?si=E6aD5B00Y1g-nGPu",
            ],
            [
                "slug" => 'astronaut',
                "list_langit" => "Astronaut",
                "icon" => "astronaut.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "lqe_fIaTRWk?si=oEHM0c_UMOqlsbzC",
            ],
            [
                "slug" => 'matahari',
                "list_langit" => "Matahari",
                "icon" => "matahari.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "H4iffpw63CI?si=C8xO3u31OMERb1MG",
            ],
            [
                "slug" => 'bintang',
                "list_langit" => "Bintang",
                "icon" => "bintang.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "I7vZTo-X5jI?si=jhvl-396Dnc2_ERs",
            ],
            [
                "slug" => 'bulan',
                "list_langit" => "Bulan",
                "icon" => "bulan.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "uuKi9f6i9A8?si=ldPLgpYk3LQXp9UZ",
            ],
            [
                "slug" => 'satelit',
                "list_langit" => "Satelit",
                "icon" => "satelit.png",
                "deskripsi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi aspernatur dicta unde ad perspiciatis corporis aut assumenda ea pariatur. Adipisci consequuntur blanditiis numquam, hic quas architecto reprehenderit iusto nemo corrupti.",
                "video_id" => "JRJ1ngbUe6A?si=kPPh_yvbAZLTUrRC",
            ],
        ];

        foreach ($data as $key => $value) {
            Langit::create($value);
        };
    }
};
