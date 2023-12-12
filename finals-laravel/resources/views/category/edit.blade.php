@extends('pages.base')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body class = "bg-info p-3" style="background-color: #008f8a">
    <!-- Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Category - {{$category->id}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('categories/delete/' . $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this Category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btns-closes" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btns-closes">Delete Category</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <h1 style="text-align: center">Edit category</h1>
    <div class="main">
        <div class="content">
            <form action="{{url('categories/' . $category->id)}}" method="POST">
                @csrf   
                <div class="labels">
                    <label for="categories">Categories</label>
                    <input type="text" name="categories" class="form-control" value="{{$category->categories}}">
                    @error('categories')
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


@endsection