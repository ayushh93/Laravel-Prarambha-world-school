@extends('frontend.layout.layout')
@section('body')
<section id="homeAbout">
         <div class="container">
           <div class="row py-5">
             <div class="col-md-6">
               <div class="home-abt-title wow fadeInLeft delay-0.5s ease animated">
                 <h6 class="large label">{{$admission->title}}</h6>
                 <div class="title-bar"></div>
                 <div class="home-abt-sub-title-dark">

                   <body style="background-color:teal;">
                    
                     <p>
                      {{$admission->description}}
                     </p>
                 </div>
               </div>
             </div>
             <div class="col-md-6">
               <a href="#">
                 <img src="" class="rounded" width="100%" height="336">
             </div>
           </div>
         </div>
   </div>
</section>
@endsection