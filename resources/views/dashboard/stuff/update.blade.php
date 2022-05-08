@extends('layouts.dashboard')
@section('content')
<div class="card-header">
    <h3 class="card-title">Update Stuff Page</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{url('admin/update_stuff/'.$stuff->id)}}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input type="text" name="name" value="{{$stuff->name}}" class="form-control" id="exampleInputPassword1" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">description</label>
        <input type="text" name="description" value="{{$stuff->description}}" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
    </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <div class="input-group">
        <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
    </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
