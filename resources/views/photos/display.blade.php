<div class="container">
  @foreach ($flyer->photos as $photo)
  <div class="col-md-3">
    <img class="d-block img-fluid" src="/{{ $photo->thumbnail_path}}">
  </div>
  @endforeach
</div>
