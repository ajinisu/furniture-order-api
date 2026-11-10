<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '一般 営業担当',
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
                'role' => 0,
            ],
            [
                'name' => 'システム 管理者',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 1,
            ],
        ]);
    }
}
