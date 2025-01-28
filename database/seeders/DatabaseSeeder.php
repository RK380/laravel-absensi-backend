<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hunt Admin',
            'email' => 'hunt@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        Company::create([
            'name' => 'Bakamla RI',
            'email' => 'rk@gmail.com',
            'address' => 'Jl. Perintis Kemerdekaan No.56',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);
    }
}
