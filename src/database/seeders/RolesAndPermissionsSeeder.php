<?php

namespace Database\Seeders;

use App\Enums\PermissionType;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        foreach (PermissionType::getValues() as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'admins'
            ]);
        }

        Role::create(['name' => 'admin', 'guard_name' => 'admins'])
            ->givePermissionTo([
                PermissionType::ReadPosts,
                PermissionType::EditPosts,
                PermissionType::DeletePosts,
            ]);

        Role::create(['name' => 'super_admin', 'guard_name' => 'admins'])
            ->givePermissionTo(Permission::all());
    }
}