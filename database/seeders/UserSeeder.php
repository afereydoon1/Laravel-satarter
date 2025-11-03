<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        $user1 = User::firstOrCreate([
            'name' => 'super-admin',
            'email'=>'admin@gmail.com',
            'phone'=>'09394106178',
            'user_type'=>'1',
            'password' => Hash::make('123456789')
        ]);

       $user2 = User::firstOrCreate([
            'name' => 'author',
            'email'=>'admin2@gmail.com',
            'phone'=>null,
            'user_type'=>'1',
            'password' => Hash::make('123456789')
       ]);

        User::firstOrCreate([
            'name' => 'customer1',
            'email'=>'customer1@gmail.com',
            'phone'=>'09191111111',
            'user_type'=>'0',
            'password' => Hash::make('123456789')
        ]);

        User::firstOrCreate([
            'name' => 'customer2',
            'email'=>'customer2@gmail.com',
            'phone'=>null,
            'user_type'=>'0',
            'password' => Hash::make('123456789')
        ]);

        User::firstOrCreate([
            'name' => 'customer3',
            'email'=>'customer3@gmail.com',
            'phone'=>null,
            'user_type'=>'0',
            'password' => Hash::make('123456789')
        ]);
    }
}
