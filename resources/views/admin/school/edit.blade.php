@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Schools</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('school')}}">Schools</a></li>
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
<form action="{{route('updateschool', $school->id)}}" method="post">
    @csrf 
  <div class="form-group">
    <label for="Title">School Title</label>
    <input type="text" class="form-control w-100" name="title" id="title"  placeholder="Enter title" value="{{$school->title}}">

  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea  class="form-control" name= "description" id="description" placeholder="Enter Description"> {{$school->description}} </textarea>
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