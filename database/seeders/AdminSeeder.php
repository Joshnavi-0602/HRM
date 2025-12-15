<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
        'first_name' => 'Admin',
        'last_name'  => 'User',
        'email'      => 'admin@example.com',
        'password'   => Hash::make('Admin123'),
        'role'       => 'admin',
    ]);
}

}
