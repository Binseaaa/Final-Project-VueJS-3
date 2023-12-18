<?php

use App\Http\Controllers\CategoriesApiController;
use App\Http\Controllers\RecipesApiController;
use App\Http\Controllers\RestaurantsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/recipes/{recipe}', [RecipesApiController::class, 'view']);
Route::patch('/recipes/{recipe}', [RecipesApiController::class, 'update']);
Route::put('/recipes/{recipe}', [RecipesApiController::class, 'update']);
Route::delete('/recipes/{recipe}', [RecipesApiController::class, 'destroy']);

Route::get('/recipes', [RecipesApiController::class, 'index']);
Route::post('/recipes', [RecipesApiController::class, 'store']);

Route::get('/categories/{category}', [CategoriesApiController::class, 'view']);
Route::patch('/categories/{category}', [CategoriesApiController::class, 'update']);
Route::put('/categories/{category}', [CategoriesApiController::class, 'update']);
Route::delete('/categories/{category}', [CategoriesApiController::class, 'destroy']);

Route::get('/categories/{category}', [CategoriesApiController::class, 'index']);
Route::post('/categories', [CategoriesApiController::class, 'store']);

Route::get('/restaurants/{restaurant}', [RestaurantsApiController::class, 'view']);
Route::patch('/restaurants/{restaurant}', [RestaurantsApiController::class, 'update']);
Route::put('/restaurants/{restaurant}', [RestaurantsApiController::class, 'update']);
Route::delete('/restaurants/{restaurant}', [RestaurantsApiController::class, 'destroy']);

Route::get('/restaurants', [RestaurantsApiController::class, 'index']);
Route::post('/restaurants', [RestaurantsApiController::class, 'store']);