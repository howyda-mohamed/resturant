@extends('layouts.dashboard')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">About Page</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('admin/insert_about')}}" method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputPassword1">Day</label>
          <input type="text" name="day" class="form-control" id="exampleInputPassword1" placeholder="Day">
        </div>
        @error('day') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
        <div class="form-group">
            <label for="exampleInputPassword1">From_Time</label>
            <input type="time" name="from_time" class="form-control" id="exampleInputPassword1" placeholder="Enter From_Time">
        </div>
        @error('from_time') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
        <div class="form-group">
            <label for="exampleInputPassword1">To_Time</label>
            <input type="time" name="to_time" class="form-control" id="exampleInputPassword1" placeholder="Enter To_Time">
        </div>
        @error('to_time') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
