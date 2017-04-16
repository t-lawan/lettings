@if (count($errors))
<div class="form-group">
  <div class="alert alert-danger fade in text-center">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          @foreach ($errors->all() as $error)
            <p><small> {{$error}}</small></p>
          @endforeach

  </div>
</div>
@endif
