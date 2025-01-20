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
            ['name' => 'PowMr SolarInverterCharger 1kw', 'power' => 1000, 'voltage' => 12],
            ['name' => 'PowMr SolarInverterCharger 1.5kw', 'power' => 1500, 'voltage' => 24],
            ['name' => 'PowMr SolarInverterCharger 1.6kw', 'power' => 1600, 'voltage' => 12],
            ['name' => 'PowMr SolarInverterCharger 3.2kw', 'power' => 3200, 'voltage' => 24],
            ['name' => 'PowMr SolarInverterCharger 3.6kw', 'power' => 3600, 'voltage' => 24],
            ['name' => 'PowMr SolarInverterCharger 4.2kw', 'power' => 4200, 'voltage' => 24],
        ]);
    }
}
