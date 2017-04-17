@extends('layout')

@section('scripts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
@endsection

@section('content')
<div class="container">
  <div class="col-md-6">
    <h2> {{str_replace('-', ' ', $flyer->street)}}</h2>
  </div>

  <div class="col-md-3 col-md-offset-3">
    <h2> ${{$flyer->price}}</h2>
  </div>

</div>
<hr />
<div class="container">
  <p>
    {{$flyer->description}}
  </p>
</div>
<div class="container">
  <h2>Photos</h2>
</div>

<div class="container">
  @include('photos.display')
</div>
<br />
@if ($flyer->user_id === Auth::id())
<div class="container">
  <h4> Add Photos</h4>
  <form action="/{{ $flyer->post_code }}/{{ $flyer->street}}/photos" method="post" class="dropzone" id="addPhotosForm">
    {{ csrf_field() }}
  </form>
</div>
@endif

@endsection

@section('scripts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

<script>
  Dropzone.options.addPhotosForm = {
      paramName: "photo",
      maxFilesize: 3,
      acceptFiles: '.jpg, .jpeg, .png, .bmp',
  };

</script>


@endsection
