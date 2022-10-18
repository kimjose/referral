<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create(['name' => 'View Facilities']);
        Permission::create(['name' => 'View Users']);
        Permission::create(['name' => 'View Patients']);
        Permission::create(['name' => 'Manage Users']);
        Permission::create(['name' => 'Manage Facilities']);
        Permission::create(['name' => 'Manage Patients']);

        $programRole = Role::create(['name' => 'Program Person']);
        $programRole->give
    }
}
