<?php

namespace Database\Seeders;

use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'name' => 'ADMINISTRADOR',
                'slug' => 'administrador',
            ],
            [
                'name' => 'USUÁRIO',
                'slug' => 'usuario',
            ],
        ];
        foreach ($profiles as $value) {
            Profile::firstOrCreate([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                // 'slug' => $value['slug'],
            ]);
        }
    }
}
