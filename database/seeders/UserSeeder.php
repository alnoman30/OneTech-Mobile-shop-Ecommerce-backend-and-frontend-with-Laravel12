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
       User::create([
            'name' => 'Abdullah Al Noman',
            'email' => 'noman@admin.com',
            'phone' => '01700000000', 
            'is_admin' => true,            
            'email_verified_at' => now(),    
            'password' => Hash::make('11111111'), 
        ]);
    }
}
