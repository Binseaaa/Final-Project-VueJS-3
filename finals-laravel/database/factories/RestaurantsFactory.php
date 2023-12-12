<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Recipes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurants>
 */
class RestaurantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recipes_id'        =>fake() ->randomElement(Recipes::pluck('id')),
            'categories_id'     =>fake() ->randomElement(Categories::pluck('id')),
            'restaurant_name'   =>fake() ->company(),
            'location'          =>fake() ->address(),
        ];
    }
}
