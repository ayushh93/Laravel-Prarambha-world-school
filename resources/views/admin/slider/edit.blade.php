@extends('admin.layout')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('slider')}}">Slider</a></li>
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
<form action="{{route('updateslider', $slider->id)}}" method="post" enctype="multipart/form-data">
    @csrf 
  <div class="form-group">
    <label for="Title">Slider Title</label>
    <input type="text" class="form-control w-100" name="title" id="title"  placeholder="Enter slider title" value="{{$slider->title}}">
    <label for="description">Slider description</label>
    <textarea class="form-control" name= "description" id="description" placeholder="Enter Description" ></textarea>
  </div>

  </div>
  <div class="form-group">
    <label for="Image">Image</label>
    <input type="hidden" name="current_image" value="{{$slider->image}}">
    <input type="file" name="image" id="new_image" class="form-control" id="image" accept="image/*" onchange="readURL(this);">   
    @if(!empty($slider->image))
    <img src="{{ asset('uploads/sliders/' . $slider->image) }}" width="50px" id="one">
    @else
    <img src="{{ asset('uploads/default/noimg.png') }}" width="50px" id="one">
     @endif

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

@section('js')
<script>
        function readURL(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(100)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection