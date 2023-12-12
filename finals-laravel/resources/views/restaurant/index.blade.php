@extends('pages.base')

@section('content')

<div>
    <div class="btns">
        <a href="{{url('restaurant/create')}}" type="button">Add Restaurant</a>
    </div>
    @if(session('info'))
    <div class="alert">
        {{session('info')}}
    </div>
    @endif

    @if(session('danger'))
    <div class="alert-danger">
        {{session('danger')}}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Recipe Name</th>
                <th>Category</th>
                <th>Restaurant Name</th>
                <th>Location</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($restaurants as $restaurant): ?>
            <tr>
                <td>{{ $restaurant->id }}</td>
                <td>{{ $restaurant->recipe->recipe_title}}</td>
                <td>{{ $restaurant->category->categories}}</td>
                <td>{{ $restaurant->restaurant_name }}</td>
                <td>{{$restaurant->location}}</td>
                <td class="text-center">
                    <a href="{{url('/restaurants/' . $restaurant->id)}}" class="btn-primarys"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

@endsection