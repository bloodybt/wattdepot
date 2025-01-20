<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batteries')->insert([
            ['name' => 'Battery A', 'capacity' => 500, 'voltage' => 12],
            ['name' => 'Battery B', 'capacity' => 1000, 'voltage' => 12],
            ['name' => 'Battery C', 'capacity' => 1500, 'voltage' => 24],
            ['name' => 'Battery D', 'capacity' => 2000, 'voltage' => 24],
        ]);
    }
}
