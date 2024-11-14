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
            'name' => 'Abdallah',
            'email' => 'abdallah@example.com',
            'password' => Hash::make('12345678'),
            'phone' => '1234567890',
            'role' => 'superadmin',
        ]);

        User::factory(55)->create();
    }
}
