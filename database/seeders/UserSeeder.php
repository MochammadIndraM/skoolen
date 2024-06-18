<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "username" => 'admin-skoolen',
                'role' => 'admin',
                "password" => 'admin-skoolen',
            ],
        ];

        foreach ($data as $key => $value) {
            User::create([
                "username" => $value['username'],
                "role" => $value['role'],
                "password" => Hash::make($value['username'])
            ]);
        };
    }
}
