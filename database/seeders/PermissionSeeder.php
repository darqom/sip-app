<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPermissions();

        $this->createAdminRole();
        $this->createTeacherRole();
    }

    private function createPermissions()
    {
        // User management
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'add-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
    }

    private function createAdminRole()
    {
        $role = Role::create(['name' => 'admin']);
        $user = User::where('email', 'admin@gmail.com')->first();

        $role->syncPermissions([
            'read-user', 'add-user', 'edit-user', 'delete-user'
        ]);
        $user->assignRole($role);
    }

    private function createTeacherRole()
    {
        $role = Role::create(['name' => 'teacher']);
        $user = User::where('email', 'teacher@gmail.com')->first();

        $role->givePermissionTo('read-user');
        $user->assignRole($role);
    }
}
