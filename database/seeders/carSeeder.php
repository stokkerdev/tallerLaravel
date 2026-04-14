<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\car;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        car::factory()->count(20)->create();
    }
}
