@extends('layout')
@section('content')
<div class="container text-center  mb-5">
        <div class="row d-flex justify-content-center heading">Update Dish Detail</div>
</div>
<div class="container m-auto justify-content-center align-items-center d-flex">
<div class="form ">
  <form action="/food/{{ $food->id}}" method="POST">
    @csrf
    @method('patch')
    
    <div class="mb-3">
        <label for="food" class="form-label">Food</label>
        <input type="text" class="form-control" id="food"  value="{{ $food->food }}" name="food">
      </div>
      <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredients</label>
        <input type="text" class="form-control" id="ingredients" name="ingredient" value="{{ $food->ingredient }}">
      </div>
      <div class="mb-3">
        <label for="remark" class="form-label">Remark</label>
        <input type="text" class="form-control" id="remark" name="remark" value="{{$food->remark}}">
      </div>
      <button type="submit" class="btn btn-success">Create-Dish</button>

</form>
</div>
</div>
    
@endsection