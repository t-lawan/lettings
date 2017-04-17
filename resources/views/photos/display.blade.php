<div class="container">
  @foreach ($flyer->photos as $photo)
  <div class="col-md-3">
    <img class="d-block img-fluid img-thumbnail" src="/{{ $photo->thumbnail_path}}">
    <h3 class="text-centers"> Building 1</h3>
  </div>
  @endforeach
</div>
