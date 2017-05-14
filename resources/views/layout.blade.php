<!DOCTYPE html>
<html>
<head>
  <title>Lettings</title>
  @include('partials.styles')

  @yield('scripts.header')
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
