<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $user = new User;

        $users = [
            [
                'name' => 'Linhuy2',
                'email' => 'linhuy123@gmail.com',
                'password' => Hash::make('23456789'),
                'role_id' => 1,
                'created_at' => NOW(),
                'updated_at' => NOW()         
            ],
            [
                'name' => 'Chelsea2',
                'email' => 'chelsea567@gmail.com',
                'password' => Hash::make('23456789'),
                'role_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Uribo',
                'email' => 'uribo012@gmail.com',
                'password' => Hash::make('01234567'),
                'role_id' => 2,
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ];

        $user->insert($users);
    }
}