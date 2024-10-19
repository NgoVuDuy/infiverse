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
        //
        User::insert([

            [
                'username' => 'admin962',
                'password' => Hash::make('12345678'),
                'fullname' => 'Ngô VŨ Duy',
                'phone_number' => '0949229535',
                'email' => 'b2110962@student.ctu.edu.vn',
                'contact' => 'https://www.facebook.com/profile.php?id=100047509129424',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/admin.png',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()


            ],
            [
                'username' => 'teacher962',
                'password' => Hash::make('12345678'),
                'fullname' => 'Nguyễn Minh Nguyễn',
                'phone_number' => '0965221376',
                'email' => 'nguyen@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'student962',
                'password' => Hash::make('12345678'),
                'fullname' => 'Nguyễn Thái Bình',
                'phone_number' => '0947023548',
                'email' => 'binh@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
