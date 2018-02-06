<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'vorname' => 'Patric',
            'nachname' => 'Pförtner',
            'email' => 'info@immofound.com',
            'password' => bcrypt('Florida2017'),
            'user_type' => 'admin',
            'verified' => 1,
        ]);

        App\User::create([
            'vorname' => 'Patric',
            'nachname' => 'Pförtner',
            'email' => 'info@wolf-gate.com',
            'password' => bcrypt('A4UIee1995'),
            'user_type' => 'user',
            'verified' => 1,
        ]);

    }
}
