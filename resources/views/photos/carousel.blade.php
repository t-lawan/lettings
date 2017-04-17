<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    @foreach ($flyer->photos as $photo)
      @if ($loop->first)
      <div class="item active">
        <img class="d-block img-fluid" src="/{{ $photo->path}}" alt="First slide" width="100%" height=" 100%">
      </div>
      @endif
    <div class="item">
      <img class="d-block img-fluid" src="/{{ $photo->path}}" alt="Slide" width="100%" height=" 100%">
    </div>
    @endforeach

  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
