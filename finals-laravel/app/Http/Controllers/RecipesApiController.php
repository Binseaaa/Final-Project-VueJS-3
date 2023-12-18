<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipesApiController extends Controller
{
    public function index() {
        $recipe = Recipes::orderBy('id')->get();

        return response()->json($recipe);
    }
    public function view(Recipes $recipe) {
        return response()->json($recipe);
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'recipe_title'  =>  'required|string',
            'description'   => 'required|string',
            'ingredients'   => 'required|string'
        ]);
        $recipe = Recipes::create($fields);
        
        return response()->json($recipe,201);
    }

    public function update(Request $request, Recipes $recipe) {
        $fields = $request->validate([
            'recipe_title'  => 'string',
            'description'   => 'string',
            'ingredients'   => 'string'
        ]);
        $recipe->update($fields);

        return response()->json([
            'status'    => 'OK',
            'message'   => 'Recipe '. $recipe->recipe_title . 'has been updated.'
        ]);
    }
    public function destroy(Recipes $recipe) {
        $details = $recipe->recipe_title;
        $recipe->delete();

        return response()->json([
            'status'    => 'OK',
            'message'   => "The recipe $details has been deleted."
        ]);
    }
}
