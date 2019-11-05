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
            <a class="nav-link js-scroll active" href="work">Work</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll" href="contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="home" class="intro route bg-image" style="background-image: url({{ asset('frontend') }}/img/1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          
          <h1 class="intro-title mb-4">Sinha Hospital in Rathnapura</h1>
        </div>
      </div>
    </div>
  </div>
  <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box text-center">
                    <h1 class="title-a">
                      Our Working Place
                    </h1>
                    <p class="subtitle-a">
                      This is the our Working Place...
                    </p>
                    <div class="line-mf"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/2.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/2.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/10.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/10.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/9.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/9.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/6.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/6.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/7.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/7.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="work-box">
                    <a href="{{ asset('frontend') }}/img/8.jpg" data-lightbox="gallery-mf">
                      <div class="work-img">
                        <img src="{{ asset('frontend') }}/img/8.jpg" alt="" class="img-fluid">
                      </div>
                    </a>
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









</body></html>