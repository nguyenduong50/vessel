<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nguyễn Văn Dương',
            'email' => 'nguyenduong@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '1',
            'company_id' => '1'
        ]);

        User::create([
            'name' => 'Bùi Đức Nhất',
            'email' => 'buinhat@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '2',
            'company_id' => '1'
        ]);

        User::create([
            'name' => 'Trần Văn Đăng',
            'email' => 'trandang@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);

        User::create([
            'name' => 'Vũ Văn Đông',
            'email' => 'vudong@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);

        User::create([
            'name' => 'Vũ Văn Định',
            'email' => 'vidinh@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);

        User::create([
            'name' => 'Trần Văn Dũng',
            'email' => 'trandung@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);

        User::create([
            'name' => 'Nguyễn Thành Vinh',
            'email' => 'nguyenvinh@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);

        User::create([
            'name' => 'Đỗ Văn Long',
            'email' => 'dolong@gmail.com',
            'password' => \Hash::make('123456789'),
            'phoneNumber' => '0789354886',
            'address' => 'Kien An - Hai Phong',
            'roles' => '3',
            'company_id' => '2'
        ]);
    }
}
