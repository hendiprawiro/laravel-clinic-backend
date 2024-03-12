<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'hendiprawiro1010@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '081234567890',
        ]);

        \App\Models\ProfilClinic::factory()->create([
            'name' => 'Clinic HFC',
            'address' => 'Jl. Jend. Sudirman 1',
            'phone' => '081234567890',
            'email' => 'qLXkV@example.com',
            'doctor_name' => 'Dr. John Doe',
            'unique_code' => '12345678',
        ]);

        //call
        $this->call(DoctorSeeder::class);
    }
}
