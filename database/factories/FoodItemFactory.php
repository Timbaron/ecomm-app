<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'image_url' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(100, 1000),
            'percentage' => $this->faker->numberBetween(10, 50),
            'season' => $this->faker->randomElement(['on', 'off']),
            'time_left' => $this->faker->dateTimeBetween('now', '+1 week'),
            'rating' => $this->faker->randomElement(['0','1', '2', '3', '4', '5']),
            'delivery_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'status' => $this->faker->randomElement([true,false]),
            'category' => $this->faker->randomElement(['shop', 'pally', 'Recommended']),
        ];
    }
}
