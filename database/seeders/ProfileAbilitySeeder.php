<?php

namespace Database\Seeders;

use App\Models\ProfileAbility;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProfileAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        |--------------------------------------------------------------------------
        | The admin profile have all the skills
        |--------------------------------------------------------------------------
        */
        for ($i = 1; $i <= 12; $i++) {
            ProfileAbility::insert([
                'profile_id' => 1,
                'ability_id' => $i,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
        // NOTE - USUÁRIO DO SISTEMA
        ProfileAbility::insert([
            'profile_id' => 2,
            'ability_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        ProfileAbility::insert([
            'profile_id' => 2,
            'ability_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        ProfileAbility::insert([
            'profile_id' => 2,
            'ability_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        ProfileAbility::insert([
            'profile_id' => 2,
            'ability_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
