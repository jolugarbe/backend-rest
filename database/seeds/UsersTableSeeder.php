<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::firstOrCreate([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $roles = Role::firstOrCreate([
            'name' => 'user',
            'display_name' => 'User'
        ]);

        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@admin.local',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

    }
}
