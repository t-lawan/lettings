<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    @foreach ($flyer->photos as $photo)
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="{{ $photo->path}}" alt="First slide">
    </div>
    @endforeach

  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
