@extends('pages.base')

@section('content')

<h1 style="text-align: center">ADD NEW CATEGORIES</h1>
<div class="main">
    <div class="content">
        <form action="{{url('category/create')}}" method="POST">
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
                <label for="categories">Categories</label>
                <input type="text" name="categories" id="categories" class="form-control">
            </div>
            <div class="add-user-btn">
                <button class="btn-primary" type="submit">
                    Add Category
                </button>
            </div>
        </form>
    </div>
</div>

@endsection