<!DOCTYPE html>
<html>
<head>
  <title> Flyer Project</title>
  @include('partials.styles')

  @yield('scripts.header')
</head>
<body>
<div class="container-fluid">
  @if (Auth::guest())
    @include('partials.nav.guest')
  @else
    @include('partials.nav.auth')
  @endif
</div>


  <div class="container">
    @yield('content')
  </div>

@include('partials.scripts')
@yield('scripts.footer')
@include('partials.flash')


</body>
</html>
