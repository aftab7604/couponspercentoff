<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => "admin@gmail.com",
            'password' => '$2y$10$6UnrTEuEaA6XEBKH2xeTZeLDRPvj4uuS4hypuD4RaGK3p1CZ/pCY2', // 123456
        ]);
    }
}
