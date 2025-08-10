<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => '123456', // password
            ],
            [
                'name' => 'Admin User',
                'email' => 'outroteste@teste.teste',
                'password' => '123456', // password
            ],
        ];

        foreach ($users as $value) {
            User::firstOrCreate([
                'name'       => $value['name'],
                'email'      => $value['email'],
                'password'   => bcrypt($value['password'])
            ]);
        }
    }
}
