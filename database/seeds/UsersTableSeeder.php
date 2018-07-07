<?php

use App\Address;
use App\NotificationData;
use App\User;
use App\Waste;
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

        for ($i = 1; $i <= 50; $i++)
        {
            $address_user = Address::firstOrCreate([
                'address_line' => str_random('25'),
                'postal_code' => random_int(5,5),
                'locality_id' => random_int(1, 8116)
            ]);

            $user = User::firstOrCreate([
                'name' => 'User '.$i,
                'email' => 'user'.$i.'@front.local',
                'password' => bcrypt('1'),
                'business_name' => 'Test user '.$i,
                'telephone' => 123456789,
                'address_id' => $address_user->id
            ]);

            $user->assignRole('user');

            $address_not = Address::firstOrCreate([
                'address_line' => str_random('25'),
                'postal_code' => random_int(5,5),
                'locality_id' => random_int(1, 8116)
            ]);

            $notification_data = NotificationData::firstOrCreate([
                'address_id' => $address_not->id,
                'contact_person' => $user->name,
                'email' => $user->email,
                'telephone' => $user->telephone,
                'user_id' => $user->id
            ]);

            for($j = 1; $j <= random_int(1, 7); $j++)
            {
                $address = Address::firstOrCreate([
                    'address_line' => str_random('25'),
                    'postal_code' => random_int(5,5),
                    'locality_id' => random_int(1, 8116)
                ]);

                $waste = Waste::firstOrCreate([
                    'name' => 'Residuo '.str_random(5),
                    'quantity' => random_int(1, 1000),
                    'measured_unit' => array_rand(array('Kg', 'Tn', 'L', 'C3'), 1),
                    'composition' => str_random('10'),
                    'generation_date' => \Carbon\Carbon::create(2014, 5, 28, 0, 0, 0)->addWeeks(rand(1, 52))->format('Y-m-d'),
                    'pickup_date' => \Carbon\Carbon::create(2014, 5, 28, 0, 0, 0)->addWeeks(rand(52, 90))->format('Y-m-d'),
                    'packaging' => str_random('35'),
                    'handling' => str_random('150'),
                    'address_id' => $address->id,
                    'transport' => str_random(15),
                    'dangerous' => random_int(0, 1),
                    'cer_code_id' => random_int(1, 5),
                    't_frequency_id' => random_int(1, 4),
                    't_waste_id' => random_int(1, 15),
                    't_ad_id' => random_int(1, 2),
                    'creator_user_id' => $user->id,
                    'available' => 1
                ]);
            }
        }

    }
}
