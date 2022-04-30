<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::insert([
            [
                'teamName'    => 'Team Rigida',
                'lastName'    => 'Pena',
                'firstName'   => 'Arlene',
                'mi'          => 'A',
                'course'      => 'BSIT',
                'year' => '3',
                'section' => 'A',
                'user_id' => '1'
            ],
            [
                'teamName'    => 'Team Pro',
                'lastName'    => 'Relles',
                'firstName'   => 'Keith Andrew',
                'mi'          => 'L',
                'course'      => 'BSIT',
                'year' => '3',
                'section' => 'A',
                'user_id' => '1',
            ],
            [
                'teamName'    => 'Team Digit',
                'lastName'    => 'Romano',
                'firstName'   => 'Philip Andrew',
                'mi'          => 'K',
                'course'      => 'BSIT',
                'year' => '3',
                'section' => 'A',
                'user_id' => '1',
            ],
            [
                'teamName'    => 'Team QM',
                'lastName'    => 'Bermillo',
                'firstName'   => 'Glenn',
                'mi'          => 'O',
                'course'      => 'BSIT',
                'year' => '3',
                'section' => 'A',
                'user_id' => '1',
            ]
        ]);
    }
}
