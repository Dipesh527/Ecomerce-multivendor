<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug,
            'photo' => $this->faker->imageUrl(),
            'summary' => $this->faker->text(),
            'status' => $this->faker->randomElement(['active','inactive']),
            'is_parent' => $this->faker->randomElement([true,false]),
            'parent_id' => $this->faker->randomElement(Categories::pluck('id')->toArray()),

        ];
    }
}
