<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create grievance']);
        Permission::create(['name' => 'edit grievance']);
        Permission::create(['name' => 'delete grievance']);
        Permission::create(['name' => 'update grievance']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'employee']);
        $role1->givePermissionTo('create grievance');
        $role1->givePermissionTo('edit grievance');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit grievance');
        $role2->givePermissionTo('delete grievance');
        $role2->givePermissionTo('update grievance');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Ali Raza Marchal',
            'employee_no' => 'PP-626',
            'division_id' => '9',
            'password' => Hash::make('123456'),
            'email' => 'ali.marchal@bankajk.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'employee_no' => 'PP-627',
            'division_id' => '9',
            'password' => Hash::make('123456'),
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'employee_no' => 'PP-628',
            'division_id' => '9',
            'password' => Hash::make('123456'),
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role3);
    }
}