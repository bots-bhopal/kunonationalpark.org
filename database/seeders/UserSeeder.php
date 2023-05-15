<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Server Admin',
            'email' => 'botadmin@knp.org',
            'password' => Hash::make('blueadmin@22'),
            'role_id' => '1',
            'status' => '0',
        ]);

        User::create([
            'name' => 'Super Admin',
            'email' => 'super@knp.org',
            'password' => Hash::make('superknp@2022'),
            'role_id' => '2',
            'status' => '0',
        ]);

        User::create([
            'name' => 'Admin VVNP',
            'email' => 'admin@knp.org',
            'password' => Hash::make('adminknp@2022'),
            'role_id' => '3',
            'status' => '1',
        ]);
    }
}
