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
                'recipe_title' => 'Classic Pancakes',
                'description' => 'Fluffy pancakes served with maple syrup.',
                'ingredients' => 'Flour, eggs, milk, baking powder, sugar, salt.',
            ],
            [
                'recipe_title' => 'Greek Yogurt Parfait',
                'description' => 'Layers of Greek yogurt, crunchy granola, and fresh berries drizzled with honey.',
                'ingredients' => 'Greek yogurt, granola, mixed berries, honey.',
            ],
            [
                'recipe_title' => 'Avocado Toast with Poached Egg',
                'description' => 'Sliced avocado on toasted bread topped with a perfectly poached egg.',
                'ingredients' => 'Whole-grain bread, avocado, poached egg, salt, pepper, chili flakes.',
            ],
            [
                'recipe_title' => 'Blueberry Oatmeal Smoothie',
                'description' => 'A nutritious and delicious smoothie with oats, blueberries, and banana.',
                'ingredients' => 'Oats, blueberries, banana, yogurt, almond milk.',
            ],
            [
                'recipe_title' => 'Vegetarian Breakfast Burrito',
                'description' => 'A hearty breakfast burrito filled with scrambled eggs, black beans, and cheese.',
                'ingredients' => 'Scrambled eggs, black beans, cheese, salsa, whole-wheat tortilla.',
            ],

            // Lunch Recipes
            [
                'recipe_title' => 'Caprese Salad',
                'description' => 'A refreshing salad with tomatoes, mozzarella, and basil.',
                'ingredients' => 'Tomatoes, fresh mozzarella, basil, balsamic glaze, olive oil.',
            ],
            [
                'recipe_title' => 'Quinoa Salad with Chickpeas',
                'description' => 'Protein-packed quinoa salad with chickpeas and fresh vegetables.',
                'ingredients' => 'Quinoa, chickpeas, cucumber, cherry tomatoes, feta cheese.',
            ],
            [
                'recipe_title' => 'Chicken Caesar Wrap',
                'description' => 'Grilled chicken wrapped in a whole-wheat tortilla with Caesar dressing.',
                'ingredients' => 'Grilled chicken, romaine lettuce, Caesar dressing, whole-wheat wrap.',
            ],
            [
                'recipe_title' => 'Vegetarian Sushi Bowl',
                'description' => 'Deconstructed sushi bowl with fresh vegetables and avocado.',
                'ingredients' => 'Sushi rice, avocado, cucumber, carrots, edamame, soy sauce.',
            ],
            [
                'recipe_title' => 'Mediterranean Quinoa Bowl',
                'description' => 'A Mediterranean-inspired quinoa bowl with vibrant flavors.',
                'ingredients' => 'Quinoa, cherry tomatoes, olives, feta cheese, hummus.',
            ],

            // Dinner Recipes
            [
                'recipe_title' => 'Salmon with Lemon-Dill Sauce',
                'description' => 'Baked salmon with a zesty lemon-dill sauce.',
                'ingredients' => 'Salmon fillet, lemon, dill, garlic, olive oil.',
            ],
            [
                'recipe_title' => 'Pasta Primavera',
                'description' => 'Colorful pasta dish with a variety of fresh vegetables.',
                'ingredients' => 'Whole-grain pasta, mixed vegetables, marinara sauce.',
            ],
            [
                'recipe_title' => 'Stuffed Bell Peppers',
                'description' => 'Bell peppers stuffed with a flavorful mixture of turkey, rice, and black beans.',
                'ingredients' => 'Bell peppers, ground turkey, rice, black beans, salsa.',
            ],
            [
                'recipe_title' => 'Teriyaki Tofu Stir-Fry',
                'description' => 'A quick and tasty tofu stir-fry with teriyaki sauce.',
                'ingredients' => 'Tofu, broccoli, bell peppers, teriyaki sauce, brown rice.',
            ],
            [
                'recipe_title' => 'Baked Chicken Parmesan',
                'description' => 'Oven-baked chicken parmesan topped with melted mozzarella.',
                'ingredients' => 'Chicken breast, breadcrumbs, marinara sauce, mozzarella cheese.',
            ],

            // Dessert Recipes
            [
                'recipe_title' => 'Chocolate Avocado Mousse',
                'description' => 'Creamy chocolate mousse made with avocado.',
                'ingredients' => 'Avocado, cocoa powder, honey, vanilla extract.',
            ],
            [
                'recipe_title' => 'Strawberry Shortcake',
                'description' => 'Classic strawberry shortcake with sweetened whipped cream.',
                'ingredients' => 'Shortcake biscuits, fresh strawberries, whipped cream.',
            ],
            [
                'recipe_title' => 'Lemon Bars',
                'description' => 'Tangy and sweet lemon bars with a buttery crust.',
                'ingredients' => 'Shortbread crust, lemon filling, powdered sugar.',
            ],
            [
                'recipe_title' => 'Apple Crisp',
                'description' => 'Warm apple crisp topped with a scoop of vanilla ice cream.',
                'ingredients' => 'Apples, oats, brown sugar, cinnamon, vanilla ice cream.',
            ],
            [
                'recipe_title' => 'Dark Chocolate Raspberry Tart',
                'description' => 'Elegant dark chocolate tart with a raspberry topping.',
                'ingredients' => 'Dark chocolate, fresh raspberries, tart crust.',
            ],
            ];
            foreach ($data as $recipeData) {
                Recipes::factory()->create($recipeData);
            }
    }
}
