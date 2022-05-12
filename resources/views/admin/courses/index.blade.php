@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Courses</li>
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
                    
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-success " href="{{route('createcourses')}}" role="button" style="border-radius: 50%">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>
                    </div>
                </div>
        <!-- /.row (main row) -->
        <!-- Simple Datatable start -->
        <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Courses Info</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th class="table-plus datatable-nosort">Course title</th>
                            <th>Course Desription</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                      @foreach ($course as $course)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td class="table-plus">{{$course->title}}</td>
                                <td class="table-plus">{{$course->description}}</td>
                                
                                <td>
                                    <a href="{{route('editcourse', $course->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('deletecourse', $course->id)}}" class="btn btn-danger">Delete</a>     
                                </td>
                            </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection