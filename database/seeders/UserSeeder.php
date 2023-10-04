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
       $users = [
        [
            'name'      => 'user',
            'email'     => 'user@gmail.com',
            'password'  => Hash::make('123123123'),
            'role'      => '0',
        ],
        [
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('123123123'),
            'role'      => '1',
        ]
       ];
       foreach($users as $user){
        User::create($user);
       }
    }
}
