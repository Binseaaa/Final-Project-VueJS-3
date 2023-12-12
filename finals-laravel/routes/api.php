<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\RestaurantsController;
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

Route::get('/recipes/{recipe}', [RecipesController::class, 'view']);
Route::patch('/recipes/{recipe}', [RecipesController::class, 'update']);
Route::put('/recipes/{recipe}', [RecipesController::class, 'update']);
Route::delete('/recipes/{recipe}', [RecipesController::class, 'destroy']);

Route::get('/recipes', [RecipesController::class, 'index']);
Route::post('/recipes', [RecipesController::class, 'store']);

Route::get('/categories/{category}', [CategoriesController::class, 'view']);
Route::patch('/categories/{category}', [CategoriesController::class, 'update']);
Route::put('/categories/{category}', [CategoriesController::class, 'update']);
Route::delete('/categories/{category}', [CategoriesController::class, 'destroy']);

Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);

Route::get('/restaurants/{restaurant}', [RestaurantsController::class, 'view']);
Route::patch('/restaurants/{restaurant}', [RestaurantsController::class, 'update']);
Route::put('/restaurants/{restaurant}', [RestaurantsController::class, 'update']);
Route::delete('/restaurants/{restaurant}', [RestaurantsController::class, 'destroy']);

Route::get('/restaurants', [RestaurantsController::class, 'index']);
Route::post('/restaurants', [RestaurantsController::class, 'store']);