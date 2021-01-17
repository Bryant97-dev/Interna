<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'title' => 'user_access',
            ],
            [
                'title' => 'admin_timeline_access',
            ],
            [
                'title' => 'user_timeline_access',
            ],
            [
                'title' => 'administrative_data_access',
            ],
            [
                'title' => 'report_access',
            ],
            [
                'title' => 'company_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
