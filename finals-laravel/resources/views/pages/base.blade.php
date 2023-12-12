<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css-1/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body class="home-page">
    <div class="links">
        <ul class="nav-links">
            <li class="nav-item"><a href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a href="{{url('/recipe')}}">Recipes</a></li>
            <li class="nav-item"><a href="{{url('/category')}}">Categories</a></li>
            <li class="nav-item"><a href="{{url('/restaurant')}}">Restaurants</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
