@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12">
      <div class="card">
        <div class="card-header">
            @if (Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            @if (Session::has('status'))
            <div class="alert alert-danger">{{ Session::get('status') }}</div>
            @endif
          <h3 class="card-title">About Us Table</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <a href="{{route('admin.add_about')}}" class="btn btn-block btn-primary btn-lg">Add Info</a>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Day</th>
                    <th>From_Time</th>
                    <th>To_Time</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about )
                <tr>
                    <td>{{$about -> id}}</td>
                    <td>{{$about -> day}}</td>
                    <td>{{$about -> from_time}}</td>
                    <td>{{$about -> to_time}}</td>
                    <td><a href="{{url('admin/edit_about/'.$about->id)}}" class="btn btn-block btn-info">Update</a></td>
                    <td><a href="{{url('admin/delete_about/'.$about->id)}}" class="btn btn-block btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection

