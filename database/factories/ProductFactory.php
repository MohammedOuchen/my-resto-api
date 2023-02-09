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
    public function definition()
    {
        return [
            'nom' => $this->faker->text(10),
            'description' => $this->faker->text(10),
            'origine' => $this->faker->text(10),
            'type' => $this->faker->text(10),
            'image' => $this->faker->text(10),
            'mark' => $this->faker->text(10),
        ];
    }
}
