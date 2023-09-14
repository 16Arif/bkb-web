<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InfografisTTMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->slug(),
            'body' => collect($this->faker->paragraphs(mt_rand(3, 5)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
        ];
    }
}
