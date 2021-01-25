<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        $users = [
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Franciscus Valentinus Ongkosianbhadra',
                'email'             => 'fvalentinus@student.ciputra.ac.id',
                'email_verified_at' => $dateNow,
                'password'          => bcrypt('password'),
                'nim'               => '0706011910004',
                'gender'            => 'male',
                'line_account'      => 'fvo140202',
                'phone'             => '081333138472',
                'batch'             => '2019',
                'description'       => 'Certified Google : IT Support',
            ],
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Bryant Lee Tjandra',
                'email'             => 'btjandra@student.ciputra.ac.id',
                'email_verified_at' => $dateNow,
                'password'          => bcrypt('password'),
                'nim'               => '0706011910001',
                'gender'            => 'male',
                'line_account'      => 'fvo140202',
                'phone'             => '081333138472',
                'batch'             => '2019',
                'description'       => 'Informatics Student',
            ],
            [
                'study_program_id'  => 8,
                'period_id'         => 1,
                'name'              => 'Javier',
                'email'             => 'jemmanuel@student.ciputra.ac.id',
                'email_verified_at' => $dateNow,
                'password'          => bcrypt('password'),
                'nim'               => '0706011910000',
                'gender'            => 'male',
                'line_account'      => 'fvo140202',
                'phone'             => '081333138472',
                'batch'             => '2019',
                'description'       => 'Informatics Student',
            ],
        ];

        User::insert($users);
    }
}
