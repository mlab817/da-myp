<?php

namespace Database\Seeders;

use App\Models\LoginKey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LoginKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoginKey::create([
            'key' => Str::random(32),
            'secret' => Str::random(32),
            'expires_at' => now()->addMinutes(5),
        ]);
    }
}
