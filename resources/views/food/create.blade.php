@extends('layout')
@section('content')
<div class="container text-center  mb-5">
        <div class="row d-flex justify-content-center heading">Tell Us About Your Favorite dish</div>
</div>
<div class="container m-auto justify-content-center align-items-center d-flex">
<div class="form ">
  <form action="/food" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="food" class="form-label">Food</label>
        <input type="text" class="form-control" id="food" name="food">
      </div>
      <div class="mb-3">
        <label for="ingredients" class="form-label">Ingredients</label>
        <input type="text" class="form-control" id="ingredients" name="ingredient">
      </div>
      <div class="mb-3">
        <label for="remark" class="form-label">Remark</label>
        <input type="text" class="form-control" id="remark" name="remark">
      </div>
      <button type="submit" class="btn btn-success">Create-Dish</button>

</form>
</div>
</div>
    
@endsection