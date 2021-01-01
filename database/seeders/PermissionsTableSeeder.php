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
                'title' => 'task_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
