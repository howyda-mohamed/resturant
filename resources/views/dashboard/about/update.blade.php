@extends('layouts.dashboard')
@section('content')
<div class="card-header">
    <h3 class="card-title">Update About Page</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{url('admin/update_about/'.$about->id)}}" method="post">
      @csrf
      @method('PUt')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputPassword1">Day</label>
        <input type="text" name="day" value="{{$about->day}}" class="form-control" id="exampleInputPassword1" placeholder="Day">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">From_Time</label>
          <input type="time" name="from_time" value="{{$about->from_time}}" class="form-control" id="exampleInputPassword1" placeholder="Enter From_Time">
      </div>

      <div class="form-group">
          <label for="exampleInputPassword1">To_Time</label>
          <input type="time" name="to_time" value="{{$about->to_time}}"  class="form-control" id="exampleInputPassword1" placeholder="Enter To_Time">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
@endsection
