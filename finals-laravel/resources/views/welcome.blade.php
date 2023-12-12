<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css-1/design.css">
    <title>Document</title>
</head>
<body>
    <div class="links">
        <ul class="nav-links">
        <li class="nav-item">
          <a href="{{url('/recipe')}}">Recipes</a></li>
        <li class="nav-item">
          <a href="{{url('/category')}}">Categories</a></li>
        <li class="nav-item">
          <a href="{{url('/restaurant')}}">Restaurants</a></li>
      </ul>
      <div class="secret">
        <h1>Hi cher! Christmas Gift Please</h1>
        <button><a href="https://youtube.com/shorts/Ng-zMbLOnMk?si=uHrMdMuZpsVOQOtK" target="_blank">Pindot me please</a></button>
      </div>
      </div>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>