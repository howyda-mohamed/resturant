@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            @if (Session::has('status'))
            <div class="alert alert-danger">{{ Session::get('status') }}</div>
            @endif
          <h3 class="card-title">About Us Table</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservs as $reserv )
                <tr>
                    <td>{{$reserv -> id}}</td>
                    <td>{{$reserv -> name}}</td>
                    <td>{{$reserv -> phone}}</td>
                    <td>{{$reserv -> date}}</td>
                    <td><a href="{{url('admin/delete_reserv/'.$reserv->id)}}" class="btn btn-block btn-danger">Delete</a></td>
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

