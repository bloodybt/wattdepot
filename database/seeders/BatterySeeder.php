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
            ['name' => 'PowMr LiFePO4', 'capacity' => 30, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 50, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 100, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 120, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 150, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 200, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 300, 'voltage' => 12],
            ['name' => 'PowMr LiFePO4', 'capacity' => 100, 'voltage' => 24],
            ['name' => 'PowMr LiFePO4', 'capacity' => 200, 'voltage' => 24],
            ['name' => 'PowMr LiFePO4', 'capacity' => 300, 'voltage' => 24],
            ['name' => 'PowMr LiFePO4', 'capacity' => 400, 'voltage' => 24],
            ['name' => 'PowMr LiFePO4', 'capacity' => 500, 'voltage' => 24],
            ['name' => 'PowMr LiFePO4', 'capacity' => 600, 'voltage' => 24],
        ]);
    }
}
