@extends('layout.app')
@section('title','List Crud')
@section('content')
<h2>Add New Contact</h2>

<form method="POST" class="form-horizontal" action="/contact-store" >
  @csrf
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="First Name" name="firstname" value="{{old('firstname')}}">
   @if($errors->has('FirstName'))
   <p class="text-danger">{{$errors->first('firstname')}}</p>
   @endif
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Last Name" name="lastname" value="{{old('lastname')}}">
      @if($errors->has('lastname'))
      <p class="text-danger">{{$errors->first('lastname')}}</p>
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Mobile No" name="number" value="{{old('number')}}">
      @if($errors->has('Number'))
      <p class="text-danger">{{$errors->first('number')}}</p>
      @endif
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Email" name="email" value="{{old('email')}}">
      @if($errors->has('Email'))
      <p class="text-danger">{{$errors->first('email')}}</p>
      @endif
    </div>
  </div>

  <div class="form-group">
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
  </div>
</form>

@endsection
