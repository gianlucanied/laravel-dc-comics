<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class FumettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> sentence(3),
            'publishing_house' => fake() -> sentence(4),
            'price' => fake() ->  randomFloat(2, 1, 10),
        ];
    }
}
