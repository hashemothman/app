<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'laptop'],
            ['name' => 'mobile'],
            ['name' => 'book'],
        ];


        foreach ($categories as $key => $category) {
        Category::create($category);
        }
    }


}



// public function run(): void
// {
//     $users = [
//         [
//            'name'=>'Admin User',
//            'email'=>'admin@itsolutionstuff.com',
//            'type'=>1,
//            'password'=> bcrypt('123456'),
//         ],
//         [
//            'name'=>'Manager User',
//            'email'=>'manager@itsolutionstuff.com',
//            'type'=> 2,
//            'password'=> bcrypt('123456'),
//         ],
//         [
//            'name'=>'User',
//            'email'=>'user@itsolutionstuff.com',
//            'type'=>0,
//            'password'=> bcrypt('123456'),
//         ],
//     ];

//     foreach ($users as $key => $user) {
//         User::create($user);
//     }
// }