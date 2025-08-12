<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProfileSeeder::class,
            AdressSeeder::class,
            UserSeeder::class,
            AbilitySeeder::class,
            ProfileAbilitySeeder::class,
            UserProfileSeeder::class,
        ]);
    }
}
