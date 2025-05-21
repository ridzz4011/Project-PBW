<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'phone' => '1234567890987',
                'password' => bcrypt('tes12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'Resepsionis',
                'email' => 'reseptionis@email.com',
                'phone' => '0987654321123',
                'role' => 'resepsionis',
                'password' => bcrypt('tes12345678'),
            ],
            [
                'name' => 'tes',
                'email' => 'tes@tes.com',
                'phone' => '1234567890123',
                'role' => 'customer',
                'password' => bcrypt('tes12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
