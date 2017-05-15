@extends('layout')

@section('scripts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" />
@endsection

@section('content')
<div class="container-fluid">
  <div class="col-md-6">
    <div class="well well-lg">
      <h2> {{str_replace('-', ' ', $flyer->street)}}: ${{$flyer->price}}</h2>

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
    <div class="well well-sm">
      <h4>Advert</h4>
    </div>
  </div>


  <div class="col-md-6">
    @include('photos.carousel')
  </div>
</div>


@if ($flyer->user_id === Auth::id())
<div class="container-fluid collapse" id="addPhotoSection">
  @include('photos.add')
</div>
<br />
<div class="container-fluid">
  <div class="well" role="button" data-toggle="collapse" data-target="#seeMessage">
    Messages
    @if(count($flyer->messages))
      <span class="badge">4</span>
    @endif
  </div>
  <div id="seeMessage" class="collapse">
  @foreach($flyer->messages as $message)
    @include('messages.partials.message')
  @endforeach

  </div>


</div>



@else
<div class="container-fluid collapse" id="addMessage">
  <div class="well well-lg ">
    <h4> Contact Owner</h4>
    <p> Message</p>
    <p> Email</p>
    <p> Name</p>

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
