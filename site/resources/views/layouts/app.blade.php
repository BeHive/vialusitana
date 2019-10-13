<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/8a59d080bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" id="et-builder-googlefonts-cached-css"
          href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%7CPT+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;ver=5.2.3#038;subset=latin,latin-ext"
          type="text/css" media="all">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- header -->
<header class="siteHeader">
    <div class="container text-right pt-1 pb-1">
        <a href="#" class="pl-3">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="pl-3">
            <i class="fab fa-twitter"></i>
        </a>
    </div>
</header>
<div id="app" class="container">

    <!-- menu -->
{{menu('site', 'menu')}}

<!-- hero -->
    <img class="headerImage pb-5" src="/storage/{{ setting('site.banner') }}">

</div>

<main role="main" class="container pb-5">
    <!-- main content -->
    @yield('content')
</main>

<footer class="site-footer">
    <p>
        <a href="#">Voltar ao topo</a>
    </p>
</footer>
</body>
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
