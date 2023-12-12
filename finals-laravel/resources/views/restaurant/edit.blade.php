@extends('pages.base')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body class = "bg-info p-3" style="background-color: #008f8a">
    <!-- Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Restaurant {{$restaurant->id}}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('restaurants/delete/' . $restaurant->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this restaurant?
            </div>
            <div class="modal-footer">
                <button type="button" class="btns-closes" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btns-closes">Delete Restaurant</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <h1 style="text-align: center">Edit Restaurant</h1>
    <div class="main">
        <div class="content">
            <form action="{{url('restaurants/' . $restaurant->id)}}" method="POST">
                @csrf
                <div class="labels">
                    <label for="restaurant_name">Restaurant Name</label>
                    <input type="text" name="restaurant_name" class="form-control" value="{{$restaurant->restaurant_name}}">
                    @error('restaurant_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="labels">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" value="{{$restaurant->location}}">
                    @error('restaurant_name')
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