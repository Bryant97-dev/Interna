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
                'period'    => 'Ganjil/2021-2022',
            ],
            [
                'period'    => 'Genap/2021-2022',
            ],
        ];

        Period::insert($periods);
    }
}
