<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            'name' => $faker->word,
            'price' => $faker->randomFloat(2, 10, 1000), 
            'stock' => $faker->randomNumber(3),
            'category_id' => function () {
                return \App\Models\Category::factory()->create()->id;
            },
        ];
    }
}
