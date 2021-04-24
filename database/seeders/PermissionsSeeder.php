<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
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
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'read']);

        // create roles and assign existing permissions
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('edit','delete','read');

        $client = Role::create(['name' => 'client']);

        $seller = Role::create(['name' => 'seller']);
        $seller->givePermissionTo('create product','edit','delete');
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            
            'name' => 'Example User',
            
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
            'city' => 'Lost city',
            'phone_number' => '+2547123456788',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Client',
            
            'email' => 'client@example.com',
            'password' => bcrypt('12345678'),
            'city' => 'Lost city',
            'phone_number' => '+2547123456788',

        ]);
        $user->assignRole($client);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Seller User',
            
            'email' => 'seller@example.com',
            'password' => bcrypt('12345678'),
            'city' => 'Found city',
            'phone_number' => '+2547123456788',

        ]);
        $user->assignRole($seller);
    }
}
