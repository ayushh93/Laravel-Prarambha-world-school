@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Site setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Site setting</li>
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
<form action="{{route('updatesitedetail',$sitedetail->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="Title">Site Title</label>
    <input type="text" class="form-control w-100" name="title" id="title"  placeholder="Enter title" value="{{$sitedetail->title}}">

  </div>
  <div class="form-group">
    <label for="logo">Logo</label>
  <input type="hidden" name="current_logo" value="{{ $sitedetail->logo }}">

    <input type="file" class="form-control" name= "logo" id="logo" accept="image/*">
    <img src="{{ asset('uploads/site_setting/' . $sitedetail->logo) }}" width="50px">

  </div>
  <div class="form-group">
  <label for="Image">Image</label>
  <input type="hidden" name="current_image" value="{{ $sitedetail->image }}">
    <input type="file" name="image" class="form-control" id="image" accept="image/*">
    <img src="{{ asset('uploads/site_setting/' . $sitedetail->image) }}" width="50px">
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