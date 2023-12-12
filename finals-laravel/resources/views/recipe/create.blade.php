@extends('pages.base')

@section('content')

<h1 style="text-align: center">CREATE NEW RECIPES</h1>
<div class="main">
    <div class="content">
        <form action="{{url('recipe/create')}}" method="POST">
            @csrf
            <div class="labels">
                <label for="recipe_title">Recipe Title</label>
                <input type="text" name="recipe_title" class="form-control">
                @error('recipe-title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="labels">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
                @error('description')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="labels">
                <label for="ingredients">Ingredients</label>
                <input type="text" name="ingredients" class="form-control">
                @error('ingredients')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="add-user-btn">
                <button class="btn-primary">
                    Add Recipe
                </button>
            </div>
        </form>
    </div>
</div>

@endsection