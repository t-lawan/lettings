
  <div class="panel panel-default">
    <div class="panel-heading">
      <a href="/{{$flyer->post_code}}/{{$flyer->street}}">
        <h3 class="panel-title">
          {{$flyer->street}}
          @if(count($flyer->messages))
          <span class="badge">4</span>
          @endif
        </h3>
      </a>

    </div>

    <div class="panel-body">
      {{$flyer->description}}
    </div>
  </div>
