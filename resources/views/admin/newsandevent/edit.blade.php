@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">News and Events</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('newsandevent')}}">News and Events</a></li>
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
<form action="{{route('updatenewsandevent','$newsandevent->id')}}" method="post" enctype="multipart/form-data">
    @csrf 
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control w-100" name="title" id="title"  placeholder="Enter title" value="{{$newsandevent->title}}">
  </div>
  @csrf 
  <div class="form-group">
    <label for="Grade">Grade</label>
    <input type="text" class="form-control w-100" name="grade" id="grade"  placeholder="Enter Grade" value="{{$newsandevent->grade}}">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control w-100" name="Date" id="Date"  placeholder="Enter Date" value="{{$newsandevent->date}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name= "description" id="description" placeholder="Enter Description" >{{$newsandevent->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="Image">Image</label>
    <input type="file" name="image" class="form-control" id="image" accept="image/*">   
    <img src="{{asset('uploads/newsandevent/' . $newsandevent->image)}}" width="50px" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection