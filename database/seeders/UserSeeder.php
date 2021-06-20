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
        User::updateOrcreate([
            'email' => 'josh.alecyan@gmail.com',
        ], [
            'first_name' => 'Jor',
            'last_name' => 'Aleqyan',
            'role' => User::ROLE_ADMIN,
            'phone' => '37477236246',
            'password' => Hash::make('qwerty12'),
        ]);
        User::updateOrcreate([
            'email' => 'frau.muller@gmail.com',
        ], [
            'first_name' => 'Frau',
            'last_name' => 'Mayer-Muller',
            'role' => User::ROLE_CONTACT,
            'phone' => '37499999999',
            'password' => Hash::make('qwerty12'),
        ]);

    }
}
