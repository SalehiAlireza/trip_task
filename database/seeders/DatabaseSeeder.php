<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Driver;
use App\Models\Task;
use App\Models\Truck;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Driver::factory()->count(10)->create();
        Truck::factory()->count(10)->create();
        Task::factory()->count(50)->create();
    }
}
