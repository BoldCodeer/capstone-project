<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'student',
                'email' => 'student@gmail.com',
                'role' => '0',
                'password' => '12345678'
            ],
            [
                'name' => 'CAPSA',
                'email' => 'capsa@gmail.com',
                'role' => '0',
                'password' => '12345678'
            ],
            [
                'name' => 'panel',
                'email' => 'panel@gmail.com',
                'role' => '3',
                'password' => '12345678'
            ]
        ]);
    }
}
