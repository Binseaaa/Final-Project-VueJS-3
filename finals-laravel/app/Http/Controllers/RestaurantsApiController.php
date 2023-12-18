<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use Illuminate\Http\Request;

class RestaurantsApiController extends Controller
{
    public function index() {
        $restaurant = Restaurants::orderBy('id')->get();

        return response()->json($restaurant);
    }

    public function view(Restaurants $restaurant) {
        
        return response()->json($restaurant);
    }
}
