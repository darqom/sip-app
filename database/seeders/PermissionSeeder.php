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
        // Role management
        Permission::create(['name' => 'read-role']);
        Permission::create(['name' => 'add-role']);
        Permission::create(['name' => 'edit-role']);
        Permission::create(['name' => 'delete-role']);
        // Student management
        Permission::create(['name' => 'read-student']);
        Permission::create(['name' => 'add-student']);
        Permission::create(['name' => 'edit-student']);
        Permission::create(['name' => 'delete-student']);
    }

    private function createAdminRole()
    {
        $role = Role::create(['name' => 'admin']);
        $user = User::where('email', 'admin@gmail.com')->first();

        $role->syncPermissions([
            'read-user', 'add-user', 'edit-user', 'delete-user',
            'read-role', 'add-role', 'edit-role', 'delete-role',
            'read-student', 'add-student', 'edit-student', 'delete-student'
        ]);
        $user->assignRole($role);
    }

    private function createTeacherRole()
    {
        $role = Role::create(['name' => 'teacher']);
        $user = User::where('email', 'teacher@gmail.com')->first();

        $role->syncPermissions([
            'read-user', 'read-student'
        ]);
        $user->assignRole($role);
    }
}
