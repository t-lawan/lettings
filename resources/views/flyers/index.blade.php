@extends('layout')

@section('content')
<div>
  <div class="panel panel-default">
    <div class="panel-heading">Listings</div>
    
  </div>

</div>
@foreach($flyers as $flyer)
  @include('flyers.partials.listing')
@endforeach


@endsection
