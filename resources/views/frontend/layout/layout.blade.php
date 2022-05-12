<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/font-awesome/css/all.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/owl.carousel.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/owl.theme.default.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/material-design/css/material-design-iconic-font.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/hs-menu.min.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/animate.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/custom.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/admission.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/responsive.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/fancybox.css')}}" />
 


  <title>Prarambha World School</title>
</head>
<body>
@php
    $course = DB::table('courses')->get();
    $sitedetail = DB::table('sitedetails')->first();
    $school1=DB::table('schools')->get();
    $admission = DB::table('admissions')->get();
    $contact = DB::table('contactuses')->first();
    $about = DB::table('aboutuses')->get();
  @endphp
  <div id="app">
    <header>
      <div id="mainMenu">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="{{route('index')}}">
          
            <img src="{{asset('uploads/site_setting/'.$sitedetail->logo)}}" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="{{route('index')}}"> Home </a>
                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown service-nav">
                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                  About
                </a>
                <div class="dropdown-menu">
                  @foreach($about as $about)
                  <a class="dropdown-item" href="{{route('singleabout',$about->title)}}">{{$about->title}}</a>
                  @endforeach
                </div>
                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown service-nav">
                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                  Courses
                </a>
              
                <div class="dropdown-menu">
                @foreach($course as $cor)
                  <a class="dropdown-item" href="{{route('singlecourse', $cor->title)}}">{{$cor->title}}</a>     
                @endforeach   
                </div>
                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown service-nav">
                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                  School
                </a>
                <div class="dropdown-menu">
               
               @foreach($school1 as $school)
                  <a class="dropdown-item" href="{{URL('school',$school->title)}}">{{$school->title}}</a>
                  @endforeach
                </div>
                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown service-nav">
                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                  Admissions
                </a>
                <div class="dropdown-menu">
                  @foreach($admission as $admission)
                  <a class="dropdown-item" href="{{route('singleadmission',$admission->title)}}">{{$admission->title}}</a>
                  @endforeach
                  <a class="dropdown-item" href="{{route('registeronline')}}">Register Online</a>

                </div>
                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="{{route('contact')}}"> Contact Us </a>

                <span class="nav-underline"></span>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="{{route('gallery')}}"> Gallery</a>

                <span class="nav-underline"></span>
              </li>
            </ul>
            <div class="nav-buttons">
              <div id="rightNavItems" class="float-right d-flex flex-row">
                <a href="{{$contact->facebook_link}}"  target="_blank" title="Facebook" data-toggle="tooltip" data-placement="bottom" id="itemFb"
                  class="btn btn-sm border-primary rounded-full">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{$contact->instagram_link}}" target="_blank" title="Instagram" data-toggle="tooltip" data-placement="bottom" id="itemInsta"   class="btn btn-sm mx-2 rounded-full">
                  <i class="fab fa-instagram"></i>
                </a>
                <a title="Mail us" data-toggle="tooltip" data-placement="bottom" id="itemMail" href="mailto:"
                  class="btn btn-sm border-success">
                  <i class="fa fa-envelope"></i>
                </a>
              </div>
              <div class="login-button">
                <a href="{{route('dashboard')}}" class="nav-login">Dashboard</a>
              </div>
              <div class="calendar-button">
                <a href="javascraipt:"><i class="fas fa-calendar-alt"></i></a>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div id="stickyContactInfo">
        <div class="tab mx-1">
          <span><i class="fa fa-check-circle"></i></span>
          <span><a href="{{route('registeronline')}}">Apply Now</a></span>
        </div>
        <div class="tab">
          <span><i class="fa fa-phone"></i></span>
          <span><a href="tel:{{$contact->phone_number}}">{{$contact->phone_number}}</a></span>
        </div>
      </div>
    </header>
@yield('body')
<footer>
      <div class="pre-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-1st">
              <div class="footer-name">
                <a class="footer-logo" href="{{route('index')}}">
                  <img src="{{asset('uploads/site_setting/'.$sitedetail->logo)}}" />
                </a>
              </div>
              <div class="footer-list">
                <i class="fa fa-map-marker-alt"></i>
                {{$contact->Address}}
              </div>
              <div class="footer-list">
                <i class="fa fa-phone"></i>
                {{$contact->phone_number}}
              </div>
              <div class="footer-list">
                <i class="fa fa-envelope"></i>
                {{$contact->email}}
              </div>
              <div class="footer-social">
                <a href="{{$contact->facebook_link}}" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{$contact->instagram_link}}" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3 footer-2nd">
              <div class="footer-title">Quick Links</div>
              <div class="footer-bar"></div>
              <div class="footer-desc">
                @php
                 $about = DB::table('aboutuses')->where('title',"About us")->first();
              @endphp
                <ul style="padding: 0; list-style: none; margin-bottom: 0">
                  <li><a href="{{route('singleabout',$about->title)}}">About PWS</a></li>
                  <li><a href="javascript:">Calender</a></li>
                  <li><a href="javascript:">Events</a></li>
                  <li><a href="javascript:">News</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 footer-3rd">
              <div class="footer-title">Our School</div>
              <div class="footer-bar"></div>
              <div class="footer-desc">
                <ul style="padding: 0; list-style: none; margin-bottom: 0">
               
                @foreach($school1 as $school)
                  <li><a href="{{route('singleschool',$school->title)}}">{{$school->title}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-3 footer-4th">
              <div class="footer-title">Contact Us</div>
              <div class="footer-bar"></div>
              <div class="footer-form">
                @include('flash-message')
                <form method="post" action="{{route('storecontactinfo')}}" id="footerContactForm">
                  @csrf
                  <input type="text" name="name" placeholder="Your Name" />
                  <input type="email" name="email" placeholder="Email Address" />
                  <input type="text" name="subject" placeholder="Subject" />
                  <textarea name="message" rows="3" placeholder="Message"></textarea>
                  <button class="footer-btn" type="submit">SEND</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="copyright">
        <div class="container">
          <div class="copyright-block">
            <div class="copyright-text">
              Copyright © <span id="dateHolder"></span> Prarambha School.
              Developed by
              <a href="javascript:">IT Arrow Pvt Ltd.</a>
            </div>
            <div class="footer-linksection">
              <a class="footer-link" href="{{route('index')}}">Home</a>
              <a class="footer-link" href="javascript:">About</a>
              <a class="footer-link" href="javascript:">Help</a>
              <a class="footer-link" href="javascript:">Personal Data Protection</a>
              <a id="back-to-top" href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div id="floating-social">
      <a class="floating-link" href="viber://chat?number={{$contact->phone_number}}" data-toggle="tooltip" data-placement="top"
        title="{{$contact->phone_number}}">
        <i class="fab fa-viber"></i>
      </a>
      <a class="floating-link" href="https://api.whatsapp.com/send?phone={{$contact->phone_number}}" target="_blank"
        data-toggle="tooltip" data-placement="top" title="{{$contact->phone_number}}">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>
  <!-- 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script type="text/javascript" src="{{asset('front/assets/js/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/assets/js/jquery.hsmenu.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/assets/js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/assets/js/main.js')}}"></script>
  <script>
    document.getElementById("dateHolder").innerHTML =
      new Date().getFullYear();
  </script>
</body>

</html>