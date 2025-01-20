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
            ['name' => 'Cable A', 'max_current' => 10, 'power_rating' => 1000],
            ['name' => 'Cable B', 'max_current' => 20, 'power_rating' => 2000],
            ['name' => 'Cable C', 'max_current' => 30, 'power_rating' => 3000],
            ['name' => 'Cable D', 'max_current' => 50, 'power_rating' => 5000],
            ['name' => 'Cable E', 'max_current' => 100, 'power_rating' => 10000],
        ]);
    }
}
