<?php

namespace Database\Seeders;

use App\Models\Recipes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'recipe_title' => 'Taco',
                'description'  => 'traditional Mexican food consisting of a small hand-sized corn- or wheat-based tortilla topped with a filling.',
                'ingredients'  => 'contain beef, chicken, pork, fish, and shellfish as well as vegetables such as lettuce, cabbage, radishes, chiles, and tomatoes',
            ],
            [
                'recipe_title' => 'Spaghetti Bolognese',
                'description' => 'Classic Italian dish with a rich tomato and meat sauce.',
                'ingredients' => 'Ground beef, tomatoes, onion, garlic, pasta, olive oil, herbs, and spices.',
            ],
            [
                'recipe_title' => 'Chicken Caesar Salad',
                'description' => 'Refreshing salad with grilled chicken, romaine lettuce, croutons, and Caesar dressing.',
                'ingredients' => 'Grilled chicken breast, romaine lettuce, croutons, Parmesan cheese, Caesar dressing.',
            ],
            [
                'recipe_title' => 'Vegetable Stir-Fry',
                'description' => 'Healthy stir-fried vegetables with tofu and soy sauce.',
                'ingredients' => 'Tofu, broccoli, bell peppers, carrots, soy sauce, ginger, garlic.',
            ],
            [
                'recipe_title' => 'Homemade Pizza',
                'description' => 'Create your own pizza with your favorite toppings and cheese.',
                'ingredients' => 'Pizza dough, tomato sauce, mozzarella cheese, pepperoni, mushrooms, olives.',
            ],
            [
                'recipe_title' => 'Chocolate Chip Cookies',
                'description' => 'Classic chocolate chip cookies with a soft and chewy texture.',
                'ingredients' => 'Flour, butter, sugar, eggs, vanilla extract, chocolate chips.',
            ],
            [
                'recipe_title' => 'Crispy Chicken Nuggets',
                'description' => 'Golden and crispy chicken nuggets served with your favorite dipping sauces.',
                'ingredients' => 'Chicken breast, breadcrumbs, flour, egg, salt, pepper, dipping sauces.',
            ],
            [
                'recipe_title' => 'Loaded Nachos Supreme',
                'description' => 'A generous serving of nachos topped with seasoned beef, melted cheese, salsa, guacamole, and sour cream.',
                'ingredients' => 'Tortilla chips, seasoned beef, cheese, salsa, guacamole, sour cream.',
            ],
            [
                'recipe_title' => 'BBQ Pulled Pork Sandwich',
                'description' => 'Slow-cooked pulled pork smothered in barbecue sauce and served in a soft bun.',
                'ingredients' => 'Pulled pork, barbecue sauce, coleslaw, soft bun.',
            ],
            ];
            foreach ($data as $recipeData) {
                Recipes::factory()->create($recipeData);
            }
    }
}
