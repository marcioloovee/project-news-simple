<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'subtitle' => $this->faker->text(60),
            'body' => $this->faker->text(500),
            'author' => $this->faker->name(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
