@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('gallery')}}">Edit Gallery</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- Main row -->
        <div class="row">
<form action="{{route('updategallery',$gallery->id)}}" method="post" enctype="multipart/form-data">
    @csrf 
  <div class="form-group">
    <label for="title"> Title</label>
    <input type="text" class="form-control w-100" name="title" id="title"  placeholder="Enter title" value="{{$gallery->title}}">

  </div>
  <div class="form-group">
    <label for="Image">Image</label>
    <input type="file" name="image" class="form-control" id="image" accept="image/*">   
    <input type="hidden" name="current_image" value="{{$gallery->image}}">

    <img src="{{asset('uploads/gallery/'. $gallery->image)}}" alt="Image" width="50px">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection