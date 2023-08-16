<?php

namespace Database\Factories;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BillFactory extends Factory
{
    protected $model = Bill::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'due_date' => Carbon::now(),
            'balance' => $this->faker->randomFloat(),
            'limit' => $this->faker->randomFloat(),
            'type' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
