<div class="well well-lg ">
  <h4> Add Photos</h4>
  <form action="/{{ $flyer->post_code }}/{{ $flyer->street}}/photos" method="post" class="dropzone" id="addPhotosForm">
    {{ csrf_field() }}
  </form>
</div>
