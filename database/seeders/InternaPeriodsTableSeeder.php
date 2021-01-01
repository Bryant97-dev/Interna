<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;

class InternaPeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = [
            [
                'period'    => 'Lifetime',
            ],
            [
                'period'    => 'Ganjil/2020-2021',
            ],
            [
                'period'    => 'Genap/2020-2021',
            ],
        ];

        Period::insert($periods);
    }
}
