<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Sakiemon🍽kitchen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            body {
              background-image: url("css/twitter_profile_image.png");
              background-repeat:no-repeat;
              /* background-size: contain; */
              background-position: center;
              /* background-size: 900px 700px; */
              position: relative;
            }

            .top-right links {
              color: #ffffff;
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

            .time {
              font-size: 38px;
              margin-bottom: 30px;
            }

            .enter {
                color: #636b6f;
                font-size: 48px;
                font-weight: 500;
                padding-left: 50px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            a.link_button {
            display: block;
            width: 160px;
            padding: 0.8em;
            text-align: center;
            margin: 0 auto;
            text-decoration: none;
            color: #EC407A;
            border: 2px solid #EC407A;
            border-radius: 3px;
            transition: .4s;
          }
          a.link_button:hover {
            background: #EC407A;
            color: #fff;
          }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                  <a href="{{ route('login') }}">Login</a>
                  <a href="{{ route('register') }}">Register</a>
                    @auth
                        <a href="{{ url('/mypages') }}">Mypages</a>
                    @else

                    @endauth
                </div>
          @endif 

            <div class="content">

      <!--     <div class="title m-b-md">
             Sakiemon 🍽 Kitchen
           </div>

         <a class="link_button" href="http://127.0.0.1:8000/list">Enter!</a> -->
       </div>
   </body>
</html>
