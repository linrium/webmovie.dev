<!DOCTYPE html>
<html lang="en" ng-app="webmovie">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Webmovie</title>
  <!-- bootstrap-->
  <link rel="stylesheet" href="{{ url('public/components/bootstrap/dist/css/bootstrap.min.css')}}" />
  <!-- font awesome-->
  <link rel="stylesheet" href="{{ url('public/components/components-font-awesome/css/font-awesome.min.css')}}" />
  <!-- styles-->
  <link rel="stylesheet" href="{{ url('public/components/hover/css/hover-min.css')}}" />
  <!-- styles-->
  <link rel="stylesheet" href="{{ url('public/css/animate.css')}}" />
  <!-- styles-->
  <link rel="stylesheet" href="{{ url('public/css/main.css')}}" />
  <link rel="stylesheet" href="{{ url('public/css/customs.css')}}" />
  <link rel="stylesheet" href="{{ url('public/css/customs1.css')}}" />

  <link rel="apple-touch-icon" sizes="57x57" href="{{ url('public/img/fav/apple-touch-icon-57x57.png')}}" />
  <link rel="apple-touch-icon" sizes="60x60" href="{{ url('public/img/fav/apple-touch-icon-60x60.png')}}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{ url('public/img/fav/apple-touch-icon-72x72.png')}}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('public/img/fav/apple-touch-icon-76x76.png')}}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{ url('public/img/fav/apple-touch-icon-114x114.png')}}" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{ url('public/img/fav/apple-touch-icon-120x120.png')}}" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{ url('public/img/fav/apple-touch-icon-144x144.png')}}" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{ url('public/img/fav/apple-touch-icon-152x152.png')}}" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('public/img/fav/apple-touch-icon-180x180.png')}}" />
  <link rel="icon" type="image/png" href="{{ url('public/img/fav/favicon-32x32.png')}}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ url('public/img/fav/android-chrome-192x192.pn')}}g" sizes="192x192" />
  <link rel="icon" type="image/png" href="{{ url('public/img/fav/favicon-96x96.png')}}" sizes="96x96" />
  <link rel="icon" type="image/png" href="{{ url('public/img/fav/favicon-16x16.png')}}" sizes="16x16" />
  <link rel="manifest" href="{{ url('public/img/fav/manifest.json')}}" />
  <link rel="mask-icon" href="{{ url('public/img/fav/safari-pinned-tab.svg')}}" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="msapplication-TileImage" content="{{ url('public/img/fav/mstile-144x144.png')}}" />
  <meta name="theme-color" content="#ffffff" />


</head>

<body>
  <div id="app">
    <div id="webmovie" class="container-fluid">
      @include('home.header')
      @include('home.nav')
      <div class="main row" ng-controller="MainController">
        <div class="col-md-12">
          <div class="wrapper">
            @yield('content')
          </div>
        </div>
      </div>
      @include('home.footer')
    </div>
  </div>
  <!-- jQuery-->
  <script src="{{ url('public/components/jquery/dist/jquery.min.js')}}"></script>
  <!-- jQuery-->
  <script src="{{ url('public/components/Flowtype.js/flowtype.js')}}"></script>
  <!-- tether-->
  <script src="{{ url('public/components/tether/dist/js/tether.min.js')}}"></script>
  <!-- bootstrap-->
  <script src="{{ url('public/components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

  <!-- My script-->
  <script src="{{ url('public/js/functions.js')}}"></script>

  <script src="{{ url('public/js/myscript.js')}}"></script>

  </div>
  

</body>

</html>
