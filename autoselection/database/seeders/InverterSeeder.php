<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InverterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inverters')->insert([
            ['name' => 'Inverter A', 'power' => 1000, 'voltage' => 12],
            ['name' => 'Inverter B', 'power' => 2000, 'voltage' => 24],
            ['name' => 'Inverter C', 'power' => 3000, 'voltage' => 12],
            ['name' => 'Inverter D', 'power' => 5000, 'voltage' => 24],
        ]);
    }
}
