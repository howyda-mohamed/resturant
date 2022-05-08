@extends('layouts.dashboard')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Mene Page</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('admin/insert_menu')}}" method="post" enctype="multipart/form-data" >
        @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title">
        </div>
        @error('title') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
        </div>
        @error('description') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter original_price">
        </div>
        @error('price') <span style="color: rgb(255, 109, 109)"> {{ $message }}</span> @enderror
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Status</label>
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
