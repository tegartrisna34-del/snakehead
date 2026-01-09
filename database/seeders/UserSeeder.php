<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@culture.com'],
            [
                'name' => 'Admin Culture',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'admin',
            ]
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'customer@snake.com'],
            [
                'name' => 'Customer Snake',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'customer',
            ]
        );
    }
}
