@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Details</li>
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
<form action="{{route('updatecontact',$contact->id)}}" method="post" >
  @csrf
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control w-100" name="Address" id="Address"  placeholder="Enter address" value="{{$contact->Address}}">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control w-100" name="email" id="email"  placeholder="Enter email" value="{{$contact->email}}">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone number</label>
    <input type="tel" class="form-control w-100" name="phone_number" id="phone_number"  placeholder="Enter contact number" value="{{$contact->phone_number}}">
  </div>
  <div class="form-group">
    <label for="facebook_link">Facebook_link</label>
    <input type="url" class="form-control w-100" name="facebook_link" id="facebook_link"  placeholder="Enter facebook_link" value="{{$contact->facebook_link}}">
  </div>
  <div class="form-group">
    <label for="instagram_link">instagram_link</label>
    <input type="url" class="form-control w-100" name="instagram_link" id="instagram_link"  placeholder="Enter instagram_link" value="{{$contact->instagram_link}}">
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