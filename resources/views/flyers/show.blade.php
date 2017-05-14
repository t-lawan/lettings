@extends('layout')

@section('scripts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
@endsection

@section('content')
<div class="container-fluid">

  <div class="well well-lg col-md-6">
    <h2> {{str_replace('-', ' ', $flyer->street)}}</h2>
    <h2> ${{$flyer->price}}</h2>

    <p >
      {{$flyer->description}}
    </p>
    <br>
    @if ($flyer->user_id === Auth::id())
    <button type="button" class="btn btn-secondary btn-block" data-toggle="collapse" data-target="#addPhotoSection">Add Photo</button>
    @else
    <button type="button" class="btn btn-secondary btn-block" data-toggle="collapse" data-target="#addMessage">Reply To Listing</button>

    @endif


  </div>

  <div class="col-md-6">
    @include('photos.carousel')

  </div>
</div>


@if ($flyer->user_id === Auth::id())
<div class="container-fluid collapse" id="addPhotoSection">
  <div class="well well-lg ">
    <h4> Add Photos</h4>
    <form action="/{{ $flyer->post_code }}/{{ $flyer->street}}/photos" method="post" class="dropzone" id="addPhotosForm">
      {{ csrf_field() }}
    </form>
  </div>
</div>
<br />
<div class="container-fluid">
  <div class="well well-lg ">
    <h4> Messages</h4>
  </div>
</div>



@else
<div class="container-fluid collapse" id="addMessage">
  <div class="well well-lg ">
    <h4> Contact Owner</h4>
  </div>

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
