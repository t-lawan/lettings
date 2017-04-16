@extends('layout')

@section('content')
  <h2 class="text-center"> Selling your home?</h2>

  <hr />


    <form method="post" action="/flyers" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
      @include('partials.errors')

      @include('flyers.partials.form')


    </form>


@endsection
