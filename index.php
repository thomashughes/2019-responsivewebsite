<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ResponsiveWebsite2019</title>
  <link href="https://fonts.googleapis.com/css?family=Karla|Rubik" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" type="text/css">
  <!--these three scripts must go last-->
</head>

<body>
  <div class="headslide">
    <div id="header" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#header" data-slide-to="0" class="active"></li>
        <li data-target="#header" data-slide-to="1"></li>
        <li data-target="#header" data-slide-to="2"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div id="glasgow "class="carousel-item active">
          <img class="img-fluid" src="IMG\Glasgow\glasgow.JPG" alt="Glasgow">
          <div id="caption1" class="carousel-caption carousel-caption-1">
            <h5>Glasgow</h5>
            <span class="d-none d-md-block"><p>"The only thing that divides this city, is its river"</p></span>
          </div>
        </div>

        <div id="lisbon" class="carousel-item">
          <img class="img-fluid" src="IMG\Lisbon\lisbon2.JPG" alt="Lisbon">
          <div id="caption2" class="carousel-caption carousel-caption-1">
            <h5>Lisbon</h5>
            <span class="d-none d-md-block"><p>If I could live like this forever</p></span>
          </div>
        </div>

        <div id="exeter "class="carousel-item">
          <img class="img-fluid" src="IMG\College\Exeter.jpg" alt="Exeter">
          <div id="caption3" class="carousel-caption carousel-caption-1">
            <h5>Exeter</h5>
            <span class="d-none d-md-block"><p>The city that I lost myself in</p></span>
          </div>
        </div>
      </div><!--carouselinner-->
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#header" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#header" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div><!--header-->
  </div><!--headslide-->

  <nav class="navbar  navbar-expand-sm " >
    <!--Makes Responsive-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="nav-link-wrap">
        <ul class="navbar-nav">
          <li class="nav-link">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-link">
            <a href="#" class="nav-link">Away</a>
          </li>
          <li class="nav-link">
            <a href="#" class="nav-link">Travel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" id="container-1">
    <h1 id="title"> Where in the world?<?php echo "My first PHP script!";?></h1>
    <div class="row" id="row-1">
      <div class="col-md-3" id="col-1">
        <a href="#" target="_self">
          <img class="img-fluid" id="col-1-img" src="IMG\Lisbon\boats.JPG" alt="lots of fresh fish in portugal">
          <div class="caption">The time when I ate so much fish, that my whole body felt weird
          </div>
        </a>
        <a href="#" target="_self">
          <img class="img-fluid" id="col-2-img" src="IMG\College\IMG_45764329794960.jpeg" alt="rock climbing at the sea">
          <div class="caption">After leaving home for the first time, I enrolled into college...
          </div>
        </a>
      </div>
      <div class="col-md-6" id="col-2">
        <a href="#" target="_self">
          <img class="img-fluid" id="col-2-img" src="IMG\Lisbon\IMG_0758.JPG" alt="a toast to friends">
          <div class="caption">Dancing with billionaires and picking edible flowers from the roadside. These were our parties</div>
        </a>
      </div>
      <div class="col-md-3" id="col-3">
        <a href="#" target="_self">
          <img class="img-fluid" id="col-img-3" src="IMG\EuroTrip\IMAG3422.jpg" alt="statue in Turin">
          <div class="caption">Hitch-hiking through the Alps. I had zero idea what I was doing</div>
        </a>
        <a href="#" target="_self">
          <img class="img-fluid" id="col-2-img" src="IMG\Trek-co\IMAG3215.jpg" alt="A purple elephant moth">
          <div class="caption">I saw two guys pin a thrid person down, whilst relieving themselves</div>
        </a>
      </div>

    </div><!--row-->
    <hr>
  </div><!--container1-->

  <div class="container" id="container-2">
    <h1 id="title">Some stories to tell...</h1>
    <div class="row" id="row-2">
      <div id="stories-banner" class="carousel slide"  data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div id="glasgow" class="carousel-item active"  >
            <img class="img-fluid" src="IMG\EuroTrip\tractor.jpg" alt="Me on a tractor">
          </div>
          <div id="lisbon" class="carousel-item">
            <img class="img-fluid"  src="IMG\Prague\synagog.JPG" alt="a head in the kelvingrove gallery">
          </div>
          <div id="exeter"  class="carousel-item">
            <img class="img-fluid" src="IMG\Prague\guard.JPG" alt="guard in prague">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#stories-banner" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#stories-banner" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div><!--row-2-->
    <hr>
  </div><!--container-2-->




  <div class="container" id="container-3">
    <div class="row" id="row-3">
      <div class="col-md-9">
        <h1 id="title">Recent writings</h1>
        <div class="row" id="inner-row-1">
          <div class="col-lg-6">
            <a href="#" >
            <img class="img-fluid"  src="IMG\Glasgow\DSC03958.JPG" alt="Glasgow">
          </div>
          <div class="col-lg-6" id="inner-row-2">
            <h3>Voted UK knife capital and Friendliest European city in the same week</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </a>
          </div>
        </div>
        <hr>
        <div class="row" id="inner-row-1">
          <div class="col-lg-6">
            <a href="#" >
            <img class="img-fluid"  src="IMG\College\IMAG1802_BURST006.jpg" alt="north Wales">
          </div>
          <div class="col-lg-6" id="inner-row-2">

           <h3>Four days, 12 people, 14 peaks, this is the welsh 3000</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </a>
          </div>
        </div>
        <hr>
        <div class="row" id="inner-row-1">
          <div class="col-lg-6">
            <a href="#" >
            <img class="img-fluid"  src="IMG\College\IMAG1644_1.jpg" alt="College picture over kayaks">
          </div>
          <div class="col-lg-6" id="inner-row-2">
            <h3>'Outdoor Adventure Instructer Training', how could I pass up?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </a>
          </div>
        </div>
        <hr>
      </div>
      <div class="col-md-3" id="sidebar">
        <div class="welcome-wrapper">
          <h3>Greetings Fellow Human!</h3>
          <img class="img-fluid" src="IMG\me\IMG_20180924_161309.jpg">
          <p><b>Hello one and all, my name is Tom, and here are some of my adventures</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <hr>
        </div>
        <div class="social-media-wrapper">
          <h3>Follow my adventure</h3>
          <a href="#" class="sidebar-fa fa fa-facebook"></a>
          <a href="#" class="sidebar-fa fa fa-twitter"></a>
          <a href="#" class="sidebar-fa fa fa-linkedin"></a>
          <a href="#" class="sidebar-fa fa fa-instagram"></a>
          <a href="#" class="sidebar-fa fa fa-pinterest"></a>
          <br>
          <button type="button" class="btn btn-primary me-button">More About Me</button>
          <hr>
        </div>
        <div class="current-wrapper">
          <h3>My current escapde </h3>
          <img class="img-fluid" src="IMG\CanineCuddles\logo.png">
          <hr>
        </div>
      </div><!--sidebar-->
    </div><!--row-3-->
  </div><!--container-3-->

  <div class="container-4" id="container-4">
    <h1>Shoot cameras not guns</h1>
    <div class="row" id="row-4">
      <div class="my-lightbox lightbox-gallery row">
          <div class="photo-gal-left col-lg-6">
            <div class="photocol">
              <img alt="picture"  data-image-hd="IMG\Prague\statue.JPG"src="IMG\Prague\statue.JPG" class="img-fluid">
            </div>
          <div class= "photocol">
            <img data-image-hd="IMG\Glasgow\dog.JPG" alt="picture" src="IMG\Glasgow\dog.JPG"  class="img-fluid" />
          </div>
          <div class="photocol">
            <img alt="picture" data-image-hd="IMG\Glasgow\king-no-one.JPG" src="IMG\Glasgow\king-no-one.JPG" class="img-fluid"/>
          </div>
        </div><!--photo-gal-left-->
        <div class="photo-gal-right col-lg-6">
          <div class="photocol">
            <img alt="picture"  data-image-hd="IMG\Glasgow\underground.JPG" src="IMG\Glasgow\underground.JPG"  class="img-fluid"/>
          </div>
          <div class="photocol">
            <img alt="picture" data-image-hd="IMG\Italy\venice.JPG" src="IMG\Italy\venice.JPG" class="img-fluid" />
          </div>
          <div class="photocol">
            <img data-image-hd="IMG\Lichfield\penguin.JPG" alt="picture" src="IMG\Lichfield\penguin.JPG" class="img-fluid"/>
          </div>
        </div><!--photo-gal-right-->
      </div><!--my-lightbox-->
      <hr>
    </div><!--row-->

  </div><!--container-4-->

  <div class="container container-5">
    <h1>There is only art left</h1>
    <div class="row">
      <div class="col-md-5 ">
        <a href="#">
        <img class="img-fluid" src="IMG\Prague\eye.JPG" alt="eye">
      </div>
    </a>
      <div class="col-md-7">
        <a href="#">
        <h3>The Prague eye</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </a>
    </div><!--row-->
      <div class="row">
        <div class="col-md-4">
          <a href="#">
          <img class="img-fluid" src="IMG\Prague\DSC00577.JPG" alt="eye">
          <h3>A beautiful place to eat and drink</h3>
        </div>
      </a>
        <div class="col-md-4">
          <a href="#">
          <img class="img-fluid" src="IMG\Lisbon\IMG_0571.JPG" alt="eye">
          <h3>Art is litereally everywhere in lisbon</h3>
        </div>
      </a>
        <div class="col-md-4">
          <a href="#">
          <img class="img-fluid" src="IMG\Prague\astro-clock.JPG" alt="eye">
          <h3>The oldest clock in the world</h3>
        </a>
        </div>


    </div><!--row-->
  </div><!--container-5-->



  <!-- Footer -->
<footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div class="container">
      <!-- Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12">
          <div class="footer-icons">
              <!-- Facebook -->
              <a href="#" class="fa fa-facebook"></a>
              <!-- Twitter -->
              <a href="#"class="fa fa-twitter"></a>
              <!--Linkedin -->
              <a href="#" class="fa fa-pinterest"></a>
              <!--Instagram-->
              <a href="#" class="fa fa-instagram"></a>
              <!--Pinterest-->
              <a href="#" class="fa fa-linkedin"></a>
            </div>
          </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Thomas Hughes
    <!-- Copyright -->

  </footer>
  <!-- Footer -->





  <!--these three scripts must go last-->
<script src="javascript.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
