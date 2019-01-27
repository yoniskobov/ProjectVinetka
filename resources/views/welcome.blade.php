<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Курсова работа</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles     -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
      </ul>
	  </div>
   </nav>
	
        

            <div class="content">
                <div class="title m-b-md"><br><br>
                    ВИНЕТКИ
                </div>

 
            </div>
       
    </body>
</html>
