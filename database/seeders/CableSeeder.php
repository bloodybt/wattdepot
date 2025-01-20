<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cables')->insert([
            ['name' => '16 мм. кв.', 'max_current' => 100, 'power_rating' => 2400],
            ['name' => '25 мм. кв.', 'max_current' => 150, 'power_rating' => 3600],
            ['name' => '35 мм. кв.', 'max_current' => 200, 'power_rating' => 4800],
            ['name' => '50 мм. кв.', 'max_current' => 300, 'power_rating' => 7200],
        ]);
    }
}
