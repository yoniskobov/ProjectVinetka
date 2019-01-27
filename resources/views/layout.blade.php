<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"   >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Курсова работа</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

  
</head>
<body>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Начало</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/shares">Списък с винетки</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/shares/create">Нова винетка</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/admin">Администраторски панел</a>
        </li>
        <form action="/search" method="get">
          <div class="input-group">
            <input type="search" name="search" class="form-control" placeholder="Провери винетка">
            <span class="input-group-prepend">
            <button type="submit" class="btn btn primary">Търси</button>
          </div> 
        </form>
      </ul>
	  </div>
   </nav>
  <div class="container">
    <br>
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>