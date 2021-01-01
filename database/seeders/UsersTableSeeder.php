<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Franciscus Valentinus Ongkosianbhadra',
                'email'             => 'fvalentinus@student.ciputra.ac.id',
                'password'          => bcrypt('password'),
            ],
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Bryant Lee Tjandra',
                'email'             => 'btjandra.ciputra.ac.id',
                'password'          => bcrypt('password'),
            ],
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Javier',
                'email'             => 'jemmanuel@student.ciputra.ac.id',
                'password'          => bcrypt('password'),
            ],
        ];

        User::insert($users);
    }
}
