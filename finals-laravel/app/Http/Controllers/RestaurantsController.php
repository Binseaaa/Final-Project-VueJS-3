<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Recipes;
use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    public function index() {
        $restaurant = Restaurants::orderBy('id')->get();

        return response()->json($restaurant);
    }

    public function index1() {
        $restaurant = Restaurants::orderBy('id')->get();

        return view('restaurant.index', ['restaurants' =>$restaurant]);
    }
    public function view(Restaurants $restaurant) {
        
        return response()->json($restaurant);
    }

    public function store(Request $request) {
        $request->validate([
            'recipes_id'     => 'required|numeric',
            'categories_id'  => 'required|numeric',
            'restaurant_name'=> 'required',
            'location'       => 'required',  
        ]);

        Restaurants::create([
            'recipes_id'        => $request->recipes_id,
            'categories_id'     => $request->categories_id,
            'restaurant_name'   => $request->restaurant_name,
            'location'          => $request->location,
        ]);

        return redirect('/restaurant')->with('info', 'A new restaurant has been added');
    }

    public function create() {
        $recipes = Recipes::pluck('recipe_title', 'id');
        $categories = Categories::pluck('categories', 'id');
    
        return view('restaurant.create', compact('recipes', 'categories'));
    }
    

    public function edit(Restaurants $restaurant) {
        return view('restaurant.edit',compact('restaurant'));
    }

    public function update(Restaurants $restaurant,Request $request) {
        $request->validate([
            'restaurant_name' => 'required|string',
            'location'        => 'required|string'
        ]);
        $restaurant->update($request->all());
        return redirect('/restaurant')->with('info', "$restaurant->restaurant_name has been updated.");
    }

    public function delete(Restaurants $restaurant) {
        $restaurant->delete();

        return redirect('/restaurant')->with('danger', "$restaurant->restaurant_name has been deleted.");
    }
}
