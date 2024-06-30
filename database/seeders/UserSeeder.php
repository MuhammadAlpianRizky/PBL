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
        // User::factory(10)->create();
        $superadmin = User::create([
            'name'=>'Owner',
            'email'=>'superadmin@gmail.com',
            'password'=>Hash::make('1234'),
            'handphone'=>'',
        ]);
        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123'),
            'handphone'=>''
            
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Muhammad Alpian Rizky',
            'email' => 'c030322123@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'handphone'=>'081905033770'
            
        ]);
        $user ->assignRole('user');

        $user = User::create([
            'name' => 'Ibnu Ali Husain',
            'email' => 'c030322120@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'handphone'=>'081223456789'
            
        ]);
        $user ->assignRole('user');
        
    
    }
}
