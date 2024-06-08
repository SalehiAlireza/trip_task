<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Truck>
 */
class TruckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $modelList = ['Toyota Tundra','Nissan Frontier','Toyota Tacoma','Ford F-Series','GMC Canyon'];
        return [
            'truck_model' => $modelList[random_int(0,4)],
            'truck_code'  => Str::random('2').random_int(100,999)
        ];
    }
}
