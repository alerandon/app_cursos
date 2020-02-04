<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create_especializacion']);
        Permission::create(['name' => 'create_curso']);
        Permission::create(['name' => 'create_leccion']);

        Permission::create(['name' => 'read_especializacion']);
        Permission::create(['name' => 'read_curso']);
        Permission::create(['name' => 'read_leccion']);

        Permission::create(['name' => 'update_especializacion']);
        Permission::create(['name' => 'update_curso']);
        Permission::create(['name' => 'update_leccion']);

        Permission::create(['name' => 'delete_especializacion']);
        Permission::create(['name' => 'delete_curso']);
        Permission::create(['name' => 'delete_leccion']);

        // create roles and assign created permissions
        $role1 = Role::create(['name' => 'estudiante']);
        $role1->givePermissionTo('');

    }
}
