<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="pic myfont">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://ahmadiraq.com"><i class="fas fa-pencil-ruler"></i><img src="{{ asset('img/multaka-logo.png') }}" width="100px"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://ahmadiraq.com">الصفحة الرئيسية<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">عن الملتقى</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    خيارات اخرى
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">الجلسات</a>
                    <a class="dropdown-item" href="#">اخر المقالات</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://www.facebook.com/ahmad.rasheed.16144">صفحتنا على الفيس بوك</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#section-2" tabindex="-1" aria-disabled="true"> تحميل تطبيق الموبايل</a>
                </li>
              </ul>
              
            </div>
          </nav> 

          @yield('content')
    </div>

          @yield('content2')
</body>
</html>
