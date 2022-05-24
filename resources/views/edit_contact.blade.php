@extends('layout.app')
@section('title','List Crud')
@section('content')
<h2>Add New Contact</h2>

<form method="POST" class="form-horizontal" action="/contact-update/{{$Contact->id}}" >
  @csrf
  @method('put')
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="First Name" name="firstname" value="{{$Contact->firstname}}">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Last Name" name="lastname" value="{{$Contact->lastname}}">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Mobile No" name="number" value="{{$Contact->number}}">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Email" name="email" value="{{$Contact->email}}">
    </div>
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-success btn-block">Update</button>
    </div>
  </div>
</form>

@endsection
