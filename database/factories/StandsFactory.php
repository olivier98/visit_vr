<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stands>
 */
class StandsFactory extends Factory
{
    protected $model = Stands::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_stand' => fake()->randomElement(['stand classic','stand moderne', 'stand prestige']),
            'number_cell' => fake()->name(),
            'stand_number' => fake()->ramdonNumber(),
            'stand_status' => fake()->randomElement(['take','free']),
            'price' => fake()->numberBetween(100,500),
            'additionnal_request'=> fake()->name()
        ];
    }
}
