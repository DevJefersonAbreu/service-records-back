<?php

namespace Database\Factories;

use App\Models\ServiceRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceRecordFactory extends Factory
{
    protected $model = ServiceRecord::class;

    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'date' => $this->faker->date,
        ];
    }
}
