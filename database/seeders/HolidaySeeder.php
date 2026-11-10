<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('holidays')->insert([
            ['holiday_date' => '2026-11-03', 'name' => '文化の日'],
            ['holiday_date' => '2026-11-23', 'name' => '勤労感謝の日'],
            ['holiday_date' => '2027-01-01', 'name' => '元日'],
        ]);
    }
}
