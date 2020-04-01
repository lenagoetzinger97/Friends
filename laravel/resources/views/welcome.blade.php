<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matches</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url(../photos/freunde.jpg);
            background-size: auto 145%;
            background-color: #000;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 80vh;
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
            font-size: 94px;
        }
        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Matches
            </div>
            @if (Route::has('login'))
            <div class="links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <div> <a href="{{ route('login') }}">Login</a>
                </div>
                <div>
                     <a href="http://127.0.0.1:8080/admin/login">Event-Login</a>
                    @if (Route::has('register'))
                </div>
                <div>
                    <a href="{{ route('register') }}">Registrierung</a>
                </div>
                <div>
                    <a href="{{ url('/registrierungevent') }}">Event Registrierung</a>
                </div>
<<<<<<< HEAD

                  @if (Route::has('login'))
                    <div class="links">
                          @auth
                              <a href="{{ url('/home') }}">Home</a>
                          @else
                              <a href="{{ route('login') }}">Login</a>
                              <a href="{{ route('admin.login') }}">Event-Login</a>
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}">Registrierung</a>
                                  <a href="{{ url('/registrierungevent') }}">Event Registrierung</a>
                              @endif
                          @endauth
                      </div>
                  @endif


=======
                @endif
                @endauth
>>>>>>> 3136a8a5a2c5cc5ba75f1de3544ab04759f22489
            </div>
        </div>
        @endif
    </div>
</body>
</html>
