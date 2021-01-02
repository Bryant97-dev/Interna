<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();
        $admin_permissions = $permissions->filter(function ($permission) {
            return $permission->title != 'user_timeline_access';
        });
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permissions = $permissions->filter(function ($permission) {
            return !in_array($permission->title, ['admin_timeline_access', 'user_access'], true );
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}
