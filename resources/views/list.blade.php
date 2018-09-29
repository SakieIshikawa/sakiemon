@extends('layouts.app')
<!--<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title></title>

        <script src="{{ asset('js/app.js') }}" defer></script>


        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Sakiemon🍽Kitchen') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                </div>
            </nav>-->

@section('content')

  <div class="make">

    <div class="kensaku">
      <form method="post" action="formmail.cgi">
        <p>🔎レシピ検索<br> <input type="text" name="name" size="30" height="60">
        <i class="fas fa-search"></i></p>
      </div>

  <div class="form">

    <form name="form" action="＜URL＞" method="post">

        <div class='btn11'>
          <a href=''>誕生日</a>
        </div>
        <div class='btn11'>
          <a href=''>クリスマス</a>
        </div>
        <div class='btn11'>
          <a href=''>ひな祭り</a>
        </div>
        <div class='btn11'>
          <a href=''>七夕</a>
        </div>
        <div class='btn11'>
          <a href=''>ハロウィン</a>
        </div>
        <div class='btn11'>
          <a href=''>お花見</a>
        </div>
        <div class='btn11'>
          <a href=''>ピクニック</a>
        </div>
        <div class='btn11'>
          <a href=''>お正月</a>
        </div>
        <div class='btn11'>
          <a href=''>運動会</a>
        </div>
      <!--  <button type="submit" name="test" value="1">誕生日</button>
      </div>

        <button type="submit" name="test" value="2">運動会</button>
        <button type="submit" name="test" value="3">クリスマス</button><br>
        <button type="submit" name="test" value="4">ひな祭り</button>
        <button type="submit" name="test" value="5">七夕</button>
        <button type="submit" name="test" value="6">ハロウィン</button><br>
        <button type="submit" name="test" value="7">お花見</button>
        <button type="submit" name="test" value="8">暑〜い日</button>
        <button type="submit" name="test" value="9">お正月</button><br>  -->
    </form>

</div>
</div>

      <div class="season">
        <div class="ttl"><a href="/recipe/new">旬のレシピ</a></div>
      </div>



<div class="make-right-content">
  <div class="recomend">

  <p>おすすめ</p>



<div class="imagelist">
  <p>写真</p>
</div>

</div>



</div>
    @endsection('content')
  </body>

</html>
