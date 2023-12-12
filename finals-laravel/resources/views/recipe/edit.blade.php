@extends('pages.base')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body class = "bg-info p-3" style="background-color: #008f8a">
    <!-- Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Recipe - {{$recipe->recipe_title}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('recipes/delete/' . $recipe->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this recipe?
            </div>
            <div class="modal-footer">
                <button type="button" class="btns-closes" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btns-closes">Delete Recipe</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <h1 style="text-align: center">Edit Recipe</h1>
    <div class="main">
        <div class="content">
            <form action="{{url('recipes/' . $recipe->id)}}" method="POST">
                @csrf
                <div class="labels">
                    <label for="recipe_title">Recipe</label>
                    <input type="text" name="recipe_title" class="form-control" value="{{$recipe->recipe_title}}">
                    @error('recipe_title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="labels">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$recipe->description}}">
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="labels">
                    <label for="ingredients">Ingredients</label>
                    <input type="text" name="ingredients" class="form-control" value="{{$recipe->ingredients}}">
                    @error('ingredients')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="add-user-btn">
                    <button class="btn-update">
                        Update
                    </button>
                    <button type="button" class="btn-delete" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
                        Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection