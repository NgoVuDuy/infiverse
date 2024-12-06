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

            // [
            //     'username' => 'admin962',
            //     'password' => Hash::make('12345678'),
            //     'fullname' => 'Ngô VŨ Duy',
            //     'phone_number' => '0949229535',
            //     'email' => 'b2110962@gmail.com',
            //     'contact' => 'https://www.facebook.com/profile.php?id=100047509129424',
            //     'desc_user' => '',
            //     'achievenment' => '',
            //     'user_img' => 'images/users/admin.png',
            //     'role' => 'admin',
            //     'created_at' => now(),
            //     'updated_at' => now()

            // ],

            [
                'username' => 'student001',
                'password' => Hash::make('12345678'),
                'fullname' => 'Ngô Vũ Duy',
                'phone_number' => '0947023548',
                'email' => 'vuduy@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'student002',
                'password' => Hash::make('12345678'),
                'fullname' => 'Lê Minh Duy',
                'phone_number' => '0124229535',
                'email' => 'minhduy@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'student003',
                'password' => Hash::make('12345678'),
                'fullname' => 'Trần Khánh Duy',
                'phone_number' => '0949276535',
                'email' => 'khanhduy@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'student004',
                'password' => Hash::make('12345678'),
                'fullname' => 'Nguyễn Bảo Duy',
                'phone_number' => '0949324535',
                'email' => 'baoduy@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'student005',
                'password' => Hash::make('12345678'),
                'fullname' => 'Nguyễn Phúc Duy',
                'phone_number' => '0913429535',
                'email' => 'phucduy@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => 'images/users/user.png',
                'role' => 'student',

                'created_at' => now(),
                'updated_at' => now()
            ],
            
            [
                'username' => 'teacher001',
                'password' => Hash::make('12345678'),
                'fullname' => 'Nguyễn Thái Bảo',
                'phone_number' => '0965221376',
                'email' => 'bao@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'teacher002',
                'password' => Hash::make('12345678'),
                'fullname' => 'Lê Minh Tâm',
                'phone_number' => '0243528223',
                'email' => 'tam2331@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'teacher003',
                'password' => Hash::make('12345678'),
                'fullname' => 'Trần Khánh An',
                'phone_number' => '0248123223',
                'email' => 'an0898@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'teacher004',
                'password' => Hash::make('12345678'),
                'fullname' => 'Lê Bảo Ngọc',
                'phone_number' => '0122758223',
                'email' => 'ngocbao@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'username' => 'teacher005',
                'password' => Hash::make('12345678'),
                'fullname' => 'Trần Thiên An',
                'phone_number' => '0248743623',
                'email' => 'thienan@gmail.com',
                'contact' => '',
                'desc_user' => '',
                'achievenment' => '',
                'user_img' => '/images/users/teacher.png',
                'role' => 'teacher',

                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
