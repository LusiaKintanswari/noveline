<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)), // 2 kata maksimal 8
            'slug'  => $this->faker->slug(),
            'synopsis' => $this->faker->paragraph(mt_rand(3,5)),
            'body' => $this->faker->paragraph(mt_rand(50,70)),
            'home_id'=> mt_rand(1,3),
            'genre_id' => mt_rand(1,3),
            'author_id' => mt_rand(1,3)
        ];
    }
}
