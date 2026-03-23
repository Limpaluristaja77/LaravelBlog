<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::updateOrCreate([
            'email' => env('DEFAULT_USER_EMAIL', 'email@email.email'),
        ], [
            'name' => env('DEFAULT_USER_NAME', 'Andri'),
            'password' => env('DEFAULT_USER_PASSWORD_HASH', Hash::make('password')),
        ]);
    }
}
