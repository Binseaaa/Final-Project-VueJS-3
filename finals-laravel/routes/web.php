    <?php

    use App\Http\Controllers\CategoriesController;
    use App\Http\Controllers\RecipesController;
    use App\Http\Controllers\RestaurantsController;
    use App\Http\Controllers\SiteController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', [SiteController::class, 'welcome'])->name('welcome');
    Route::get('/home', [SiteController::class, 'home'])->name('home');
    
    Route::get('/recipe', [RecipesController::class, 'index1']);
    Route::get('recipe/create', [RecipesController::class, 'create'])->name('recipe');
    Route::post('recipe/create', [RecipesController::class, 'store'])->name('recipe');
    Route::get('recipes/{recipe}', [RecipesController::class, 'edit']);
    Route::post('recipes/{recipe}', [RecipesController::class, 'update'])->name('recipes');
    Route::delete('/recipes/delete/{recipe}', [RecipesController::class, 'delete']);
    
    Route::get('/category', [CategoriesController::class, 'index1']);
    Route::get('category/create', [CategoriesController::class, 'create'])->name('category');
    Route::post('category/create', [CategoriesController::class, 'store'])->name('category');
    Route::get('categories/{category}', [CategoriesController::class, 'edit']);
    Route::post('categories/{category}', [CategoriesController::class, 'update'])->name('categories');
    Route::delete('/categories/delete/{category}', [CategoriesController::class, 'delete']);

    Route::get('/restaurant', [RestaurantsController::class, 'index1']);
    Route::get('restaurant/create', [RestaurantsController::class, 'create'])->name('restaurant');
    Route::post('restaurant/create', [RestaurantsController::class, 'store'])->name('restaurant');
    Route::get('restaurants/{restaurant}', [RestaurantsController::class, 'edit']);
    Route::post('restaurants/{restaurant}', [RestaurantsController::class, 'update'])->name('restaurants');
    Route::delete('/restaurants/delete/{restaurant}', [RestaurantsController::class, 'delete']);
    