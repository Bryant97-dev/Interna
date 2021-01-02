<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            'name'          => 'Surya Megah Expertindo',
            'address'       => 'Ngagel Jaya Selatan 119 Surabaya',
            'supervisor'    => 'Johan Gozali',
            'email'         => 'sales@smx-corp.com',
            'phone'         => '081333138472',
            'npwp'          => '0000000000000000'
        ];

        Company::insert($companies);
    }
}
