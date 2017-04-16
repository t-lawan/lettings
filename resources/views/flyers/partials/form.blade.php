@inject('countries','App\Http\Utilities\Country')

{{ csrf_field() }}

<div class="form-group">
  <input type="text" name="street" id="street" class="form-control" value="{{old('street')}}" placeholder= "street" required="true">
</div>

<div class="form-group">
  <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}" placeholder= "city" required="true">
</div>

<div class="form-group">
  <input type="text" name="state" id="state" class="form-control" value="{{old('state')}}" placeholder= "state" required="true">
</div>

<div class="form-group">
  <input type="text" name="post_code" id="post_code" class="form-control" value="{{old('post_code')}}" placeholder= "post code" required="true">
</div>


<div class="form-group">
  <select id="country" name="country" value="{{old('country')}}" class="form-control" required="true">
      <option disabled>Country</option>
    @foreach ($countries::all() as $country => $code)
      <option value="{{$code}}">
          {{$country}}
      </option>
    @endforeach
  </select>
</div>
<hr />

<div class="form-group">
  <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}" placeholder= "sale price">
</div>

<div class="form-group">
  <textarea placeholder= "home description" name="description" id="description" class="form-control" rows="3" required="true">
    {{old('description')}}
  </textarea>
</div>



<div class="form-group">
  <button type="submit" class="btn btn-secondary">Create Flyer</button>
</div>
