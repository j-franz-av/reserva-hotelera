<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        User::create([
            'name' => 'Javier Franz',
            'email' => 'arquinigovalle@gmail.com',
            'password' => Hash::make('franz123'),
            'role' => 'Super',
            'random_key' => Str::random(60),
        ]);
        User::create([
            'name' => 'Yeremin',
            'email' => 'yereminblas@gmail.com',
            'password' => Hash::make('yeremin123'),
            'role' => 'Super',
            'random_key' => Str::random(60),
        ]);
    }
}
