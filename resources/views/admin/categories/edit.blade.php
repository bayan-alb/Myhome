@extends('layouts.app')

@section('content')



<div class="text-center"><h1> Update Property</h1></div>
<div class="container">
<form action="/categories/create" method="POST">
    @csrf
  <div class="form-group">
    <input type="text" class="form-control" placeholder="propertyTitle" name="name">
      
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection