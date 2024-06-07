<?php

namespace Database\Seeders;

use App\Models\Abjad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AbjadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "huruf" => 'Aa',
                "img_abjad" => 'abjad-A',
                "img_des" => 'A_ayam',
                "deskripsi" => 'Ayam'
            ],
            [
                "huruf" => 'Bb',
                "img_abjad" => 'abjad-B',
                "img_des" => 'B_buaya',
                "deskripsi" => 'Buaya'
            ],
            [
                "huruf" => 'Cc',
                "img_abjad" => 'abjad-C',
                "img_des" => 'C_cabe',
                "deskripsi" => 'Cabe'
            ],
            [
                "huruf" => 'Dd',
                "img_abjad" => 'abjad-D',
                "img_des" => 'D_dadu',
                "deskripsi" => 'Dadu'
            ],
            [
                "huruf" => 'Ee',
                "img_abjad" => 'abjad-E',
                "img_des" => 'E_elang',
                "deskripsi" => 'Elang'
            ],
            [
                "huruf" => 'Ff',
                "img_abjad" => 'abjad-F',
                "img_des" => 'F_foto',
                "deskripsi" => 'Foto'
            ],
            [
                "huruf" => 'Gg',
                "img_abjad" => 'abjad-G',
                "img_des" => 'G_gajah',
                "deskripsi" => 'Gajah'
            ],
            [
                "huruf" => 'Hh',
                "img_abjad" => 'abjad-H',
                "img_des" => 'H_helikopter',
                "deskripsi" => 'Helikopter'
            ],
            [
                "huruf" => 'Ii',
                "img_abjad" => 'abjad-I',
                "img_des" => 'I_ikan',
                "deskripsi" => 'Ikan'
            ],
            [
                "huruf" => 'Jj',
                "img_abjad" => 'abjad-J',
                "img_des" => 'J_jagung',
                "deskripsi" => 'Jagung'
            ],
            [
                "huruf" => 'Kk',
                "img_abjad" => 'abjad-K',
                "img_des" => 'K_kucing',
                "deskripsi" => 'Kucing'
            ],
            [
                "huruf" => 'Ll',
                "img_abjad" => 'abjad-L',
                "img_des" => 'L_lampu',
                "deskripsi" => 'Lampu'
            ],
            [
                "huruf" => 'Mm',
                "img_abjad" => 'abjad-M',
                "img_des" => 'M_mobil',
                "deskripsi" => 'Mobil'
            ],
            [
                "huruf" => 'Nn',
                "img_abjad" => 'abjad-N',
                "img_des" => 'N_nanas',
                "deskripsi" => 'Nanas'
            ],
            [
                "huruf" => 'Oo',
                "img_abjad" => 'abjad-O',
                "img_des" => 'O_obor',
                "deskripsi" => 'Obor'
            ],
            [
                "huruf" => 'Pp',
                "img_abjad" => 'abjad-P',
                "img_des" => 'P_pisang',
                "deskripsi" => 'Pisang'
            ],
            [
                "huruf" => 'Qq',
                "img_abjad" => 'abjad-Q',
                "img_des" => 'q_quran',
                "deskripsi" => "Qur'an"
            ],
            [
                "huruf" => 'Rr',
                "img_abjad" => 'abjad-R',
                "img_des" => 'R_rambutan',
                "deskripsi" => 'Rambutan'
            ],
            [
                "huruf" => 'Ss',
                "img_abjad" => 'abjad-S',
                "img_des" => 'S_sapi',
                "deskripsi" => 'Sapi'
            ],
            [
                "huruf" => 'Tt',
                "img_abjad" => 'abjad-T',
                "img_des" => 'T_telur',
                "deskripsi" => 'Telur'
            ],
            [
                "huruf" => 'Uu',
                "img_abjad" => 'abjad-U',
                "img_des" => 'U_unta',
                "deskripsi" => 'Unta'
            ],
            [
                "huruf" => 'Vv',
                "img_abjad" => 'abjad-V',
                "img_des" => 'V_vasbunga',
                "deskripsi" => 'Vas'
            ],
            [
                "huruf" => 'Ww',
                "img_abjad" => 'abjad-W',
                "img_des" => 'W_wortel',
                "deskripsi" => 'Wortel'
            ],
            [
                "huruf" => 'Xx',
                "img_abjad" => 'abjad-X',
                "img_des" => '',
                "deskripsi" => ''
            ],
            [
                "huruf" => 'Yy',
                "img_abjad" => 'abjad-Y',
                "img_des" => '',
                "deskripsi" => ''
            ],
            [
                "huruf" => 'Zz',
                "img_abjad" => 'abjad-Z',
                "img_des" => 'Z_zebra',
                "deskripsi" => 'Zebra'
            ],
        ];

        foreach ($data as $key => $value) {
            Abjad::create([
                "huruf" => $value['huruf'],
                "img_abjad" => $value['img_abjad'],
                "img_des" => $value['img_des'],
                "deskripsi" => $value['deskripsi']
            ]);
        };
    }
}
