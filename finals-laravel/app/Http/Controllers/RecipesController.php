<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        $recipe = Recipes::orderBy('id')->get();

        return response()->json($recipe);
    }

    public function index1() {
        $recipe = Recipes::orderBy('id')->get();

        return view('recipe.index', ['recipes' =>$recipe]);
    }
    public function view(Recipes $recipe) {
        
        return response()->json($recipe);
    }

    public function store(Recipes $recipe,Request $request) {
        $request->validate([
            'recipe_title' => 'required|string',
            'description'  => 'required|string',
            'ingredients'  => 'required|string'
        ]);

        Recipes::create([
            'recipe_title'  => $request->recipe_title,
            'description'   => $request->description,
            'ingredients'   => $request->ingredients,
        ]);

        $recipe->update($request->all());
        return redirect('/recipe')->with('info', 'A new recipe has been added');
    }

    public function create() {
        return view('recipe.create');
    }

    public function edit(Recipes $recipe) {
        return view('recipe.edit',compact('recipe'));
    }

    public function update(Recipes $recipe,Request $request) {
        $request->validate([
            'recipe_title' => 'required|string',
            'description'  => 'required|string',
            'ingredients'  => 'required|string'
        ]);
        $recipe->update($request->all());
        return redirect('/recipe')->with('info', "$recipe->recipe_title has been updated.");
    }

    public function delete(Recipes $recipe) {
        $recipe->delete();

        return redirect('/recipe')->with('danger', "$recipe->recipe_title has been deleted.");
    }
}
