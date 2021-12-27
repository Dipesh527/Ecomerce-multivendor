<?php

namespace Database\Factories;

use App\Http\Controllers\BrandController;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'description' => $this->faker->text(),
            'photo' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(0,100),
            'offer_price' => $this->faker->numberBetween(0,100),
            'discount' => $this->faker->numberBetween(0,100),
            'stock' => $this->faker->numberBetween(0,100),
            'vendor_id' => $this->faker->randomElement(User::where('role','vendor')->pluck('id')->toArray()),
            'cat_id' => $this->faker->randomElement(Categories::where('is_parent','1')->pluck('id')->toArray()),
            'child_cat_id' => $this->faker->randomElement(Categories::where('is_parent','0')->pluck('id')->toArray()),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'size' => $this->faker->randomElement(['S', 'M','L']),
            'condition' => $this->faker->randomElement(['new', 'popular','winter']),
        ];
    }
}
