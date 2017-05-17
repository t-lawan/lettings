<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lettings</title>

    <!-- Styles -->
    @include('partials.styles')
    <!-- Scripts -->
    @yield('scripts.header')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
<div class="container">
  <div class="col-xs-10 col-xs-offset-1">
    @if (Auth::guest())
      @include('partials.nav.guest')
    @else
      @include('partials.nav.auth')
    @endif
  </div>

</div>


  <div class="container">
    @yield('content')
  </div>

@include('partials.scripts')
@yield('scripts.footer')
@include('partials.flash')


</body>
</html>
