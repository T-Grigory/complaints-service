<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ComplaintReason;
use App\Models\Polyclinic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => Client::all()->random()->id,
            'polyclinic_id' => Polyclinic::all()->random()->id,
            'reason_id' => ComplaintReason::all()->random()->id,
            'text' => $this->faker->text()
        ];
    }
}
