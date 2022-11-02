<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Role::create(['name' => 'superadmin']);
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $user = Role::create(['name' => 'user']);


        //permission

        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]

            ],
            [
                'group_name' => 'category',
                'permissions' => [
                    'category.create',
                    'category.edit',
                    'category.delete',
                    'category.view',
                    'category.approve',

                ]

            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.edit',
                    'role.delete',
                    'role.view',
                    'role.approve',

                ]

            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',

                ]

            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admin.view',
                    'admin.create',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',

                ]

            ],

        ];

        // create permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                 $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $superAdmin->givePermissionTo($permission);
                $permission->assignRole($superAdmin);
            }
        }
    }
}
