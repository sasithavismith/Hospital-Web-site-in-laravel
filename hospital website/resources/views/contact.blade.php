<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hospital Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="{{ asset('frontend') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="{{ asset('frontend') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="{{ asset('frontend') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">

 
  
</head>
<body>
  <body id="page-top">
    <div id="home" class="intro route bg-image" style="background-image: url({{ asset('frontend') }}/img/1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Sinha Hospital in Rathnapura</h1>
          
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Hospital</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll " href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="work">Work</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        @extends('layout.app')
        @section('content')
    
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{ asset('frontend') }}/img/25.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h1 class="title-left">
                      Send Message Us.!
                    </h1>  @extends('inc.messages')
                  </div>
                  <div>

    <form method="post" action="/submit">
                    {{csrf_field()}}
               <div class="col-md-12 ">

                       <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 ">
                           <div class="form-group">
                            <input type="text" name="email" class="form-control" id="name" placeholder="Your email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        
                         <div class="col-md-12 ">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-12">
                 <button type="submit" class="button button-a button-big  button-rouded">Send Message</button>
</div>
                 </form></div>
                </div>
                <div class="col-md-6">
                  
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch.!
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                     You are the our best partners. we are always care about you.Don't Afaraid to come for us.Our hospital open for you in a 24hour.Thank you....!
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> MainRoad,Rathnapura.</li>
                      <li><span class="ion-ios-telephone"></span> (045)2222111</li>
                      <li><span class="ion-email"></span> sinhahospital@srilanka.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
<section class="paralax-mf bg-image sect-mt4 route" style="background-image: url({{ asset('frontend') }}/img/3.jpg)">
 <div class="overlay-mf"></div>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="copyright">&copy; Copyright<strong>Sinha Hospital</strong>.All Rights Reserved</p>
        <div class="credits">
          Designed by Sasitha Vismith
        </div>
      </div>
    </div>
   </div>
  </footer>
 </section>
 
<script src="{{ asset('frontend') }}/lib/jquery/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/popper/popper.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/counterup/jquery.counterup.js"></script>
  <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{ asset('frontend') }}/lib/typed/typed.min.js"></script>
  
  <script src="{{ asset('frontend') }}/contactform/contactform.js"></script>

  
  <script src="{{ asset('frontend') }}/js/main.js"></script>

    @endsection
</body>
</html>