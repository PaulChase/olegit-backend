<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domain' => $this->faker->domainName(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->text()
        ];
    }
}
