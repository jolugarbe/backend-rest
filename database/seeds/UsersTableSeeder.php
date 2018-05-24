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
            'password' => bcrypt('admin'),
            'business_name' => 'Administrator',
            'telephone' => 123456789
        ]);

        $admin->assignRole('admin');

        $user = User::firstOrCreate([
            'name' => 'User 1',
            'email' => 'user@front.local',
            'password' => bcrypt('1'),
            'business_name' => 'Test user',
            'telephone' => 123456789
        ]);

        $user->assignRole('user');

    }
}
