<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Recipes;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $category = Categories::orderBy('id')->get();

        return response()->json($category);
    }

    public function index1() {
        $category = Categories::orderBy('id')->get();

        return view('category.index', ['categories' =>$category]);
    }
    public function view(Categories $category) {
        
        return response()->json($category);
    }

    public function store(Request $request) {
        $request->validate([
            'recipes_id'  => 'required|numeric',
            'categories' => 'required',
        ]);

        Categories::create([
            'recipes_id'   => $request->recipes_id,
            'categories'  => $request->categories,
        ]);

        return redirect('/category')->with('info', 'A new category has been added');
    }

    public function create() {
        $recipes = Recipes::pluck('recipe_title', 'id');
        return view('category.create', ['recipes' => $recipes]);
    }

    public function edit(Categories $category) {
        return view('category.edit',compact('category'));
    }

    public function update(Categories $category,Request $request) {
        $request->validate([
            'categories' => 'required|string',
        ]);
        $category->update($request->all());
        return redirect('/category')->with('info', "$category->id has been updated.");
    }

    public function delete(Categories $category) {
        $category->delete();

        return redirect('/category')->with('danger', "$category->id has been deleted.");
    }
}
