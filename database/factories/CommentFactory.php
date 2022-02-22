<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link_id' => 1,
            'user_name' => $this->faker->name(),
            'user_comment' => $this->faker->sentence(12),
            'status' => $this->faker->numberBetween(0, 2),

        ];
    }
}
