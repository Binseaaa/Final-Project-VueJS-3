<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesApiController extends Controller
{
    public function index($categoryType)
{
    $categories = Categories::with('recipe')
        ->where('categories', $categoryType)
        ->get();

    return response()->json($categories);
}
    public function view($category)
{
    try {
        // Use firstOrFail to retrieve the first result or throw a 404 exception if not found
        $categoryModel = Categories::where('categories', $category)->firstOrFail();

        return response()->json($categoryModel);
    } catch (ModelNotFoundException $e) {
        return response()->json(['error' => 'Category not found'], 404);
    }
}
public function store(Request $request) {
    $fields = $request->validate([
        'recipes_id'  =>  'required|exists:recipes,id',
        'categories' => 'required|string',
    ]);
    $category = Categories::create($fields);
    
    return response()->json($category, 201);
}

    public function update(Request $request, Categories $category) {
        $fields = $request->validate([
            'recipes_id'  => 'exists:recipes, id',
            'categories'   => 'string',
        ]);
        $category->update($fields);

        return response()->json([
            'status'    => 'OK',
            'message'   => 'Category '. $category->category_title . 'has been updated.'
        ]);
    }
    public function destroy(Categories $category) {
        $details = $category->id;
        $category->delete();

        return response()->json([
            'status'    => 'OK',
            'message'   => "The category $details has been deleted."
        ]);
    }
}
