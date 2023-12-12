@extends('pages.base')

@section('content')

<h1 style="text-align: center">ADD NEW RESTAURANTS</h1>
<div class="main">
    <div class="content">
        <form action="{{url('restaurant/create')}}" method="POST">
            @csrf
            <div class="labels">
                <label for="recipes_id">Select Recipe</label>
                <select name="recipes_id" id="recipes_id" class="form-select">
                    <option hidden="true">Select Recipe</option>
                    @foreach ($recipes as $recipeId => $recipe)
                        <option value="{{$recipeId}}">{{$recipe}}</option>
                    @endforeach
                </select>
            </div>
            <div class="labels">
                <label for="categories_id">Select Category</label>
                <select name="categories_id" id="categories_id" class="form-select">
                    <option hidden="true">Select Category</option>
                    @foreach ($categories as $categoryId => $category)
                        <option value="{{$categoryId}}">{{$category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="labels">
                <label for="restaurant_name">Restaurant Name</label>
                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control">
            </div>
            <div class="labels">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>
            <div class="add-user-btn">
                <button class="btn-primary" type="submit">
                    Add Restaurant
                </button>
            </div>
        </form>
    </div>
</div>

@endsection