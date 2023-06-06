<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('/css/tiny-slider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />

    <title>
      {{ $title }}
    </title>
  </head>
  <body>

    @include('home.layouts.header')

    <main id="main">

        @yield('content')

    </main>

     @include('home.layouts.footer')

     <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
  </body>
</html>
