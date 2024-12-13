<?php 
    require 'files/uarequire.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="logo.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SHXY0N529Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-SHXY0N529Y');
  </script>
</head>

<body>
  <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="index.php">Matcite 
            <span style="color:#1eaaf1;">Edu 
              <?php include 'files/uauser.php' ?>
            </span>
          </a>
        </div>

        <script async src="https://cse.google.com/cse.js?cx=001703284887918315276:azh2sqrnzdm"></script>
        <form action="https://www.google.com/search" method="GET" class="searchform order-lg-last">
          <div class="gcse-search">

          </div>
        </form>
        <div class="col-md topper d-flex align-items-center justify-content-end">
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button style="color: rgb(255, 255, 255, 0.7) !important;" class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto" id="color">
          <li class="nav-item active"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="index.php"
              class="nav-link pl-0" title="Home page">Home</a></li>
          <li class="nav-item"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="about.html" class="nav-link"
              title="About page">About</a></li>
          <li class="nav-item"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="courses.html"
              class="nav-link" title="courses and tutorials page">Courses</a>
          </li>
          <li class="nav-item"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="keynotes.html"
              class="nav-link" title="keynotes and motivational videos page">Keynotes</a></li>
          <li class="nav-item"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="blog.html" class="nav-link"
              title="blogs and articles">Blog</a></li>
          <li class="nav-item"><a style="color: rgb(255, 255, 255, 0.7) !important;" href="tools.html" class="nav-link"
              title="Tools and other resources page">Tools</a>
          </li>
            <li class="nav-item active"><a href="contact.html" name="logout" class="nav-link" title="contact page">Contact</a>
          </li>
          <li class="nav-item">
            <form action="files/logout.php" method="POST" name="logout">
            <button type="submit" name="logout" style="color: rgb(255, 255, 255, 0.7) !important; padding-top: 0.8em;" 
             class="nav-link btn btn-link mt-2" title="contact page">Logout</button>
            </form>

          </li>
        </ul>
      </div>
    </div>

  </nav>
  <!-- END nav -->

  <!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section> -->

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row contact-info justify-content-center">
        <div class="col-md-9 m-4">
          
           <h4 class="text-center text-dark">Add Educational Videos</h4>
           <div class="container">
           <form action="files/vdeoConfig.php" method="POST">
           <div class="form-group">
                    <label for="title">Video Title</label>
                    <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Enter Video Title" required>
                </div>
                <div class="form-group">
                    <label for="link">Enter Video Link</label>
                    <input type="text" class="form-control" name="link" aria-describedby="link" placeholder="Enter Video Link" required>
                </div>
                <div class="form-group">
                    <label for="desc">Description or Article</label>
                    <textarea type="text" class="form-control" name="description" placeholder="Enter Description"> </textarea>
                    <br>

                </div>
                
                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </form>
           </div>
        </div>
    
      </div>

      <div class="row" id="video-display">
        <?php require 'files/display.php' ?>
      </div>
      
    </div>
    
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Rijiyar Zaki , Kano, Nigeria </span>
                </li>
                <li><span><a href="#"><span class="icon icon-phone"></span><span class="text"><a
                          href="Tel: +2348105246939">+2348105246939</a></span></a></span></li>
                <li><span><a href="#"><span class="icon icon-envelope"></span><span class="text"><a
                          href="mailto:contact@matcite.com">contact@matcite.com</a></span></a></span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Courses</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li>
              <li><a href="contact.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Subscribe Us!</h2>
            <form action="subscribe.php" method="POST" class="subscribe-form">
              <div class="form-group">
                <input type="email" name="email" class="form-control mb-2 text-center" placeholder="Enter email address"
                  id="email" required placeholder="Enter your email address ">
                <input type="submit" value="Subscribe" class="form-control submit px-3">
              </div>
            </form>
          </div>
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
             
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved |  
            <i class="icon-heart" aria-hidden="true"></i> by <a href="https://matcite.com" target="_blank">matcite</a>
             
          </p>
        </div>
      </div>
    </div>
  </footer>

 

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#1eaaf1" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>


</body>

</html>