<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A B2B Wholesale E-commerce Platform">
    <meta name="author" content="kalakal">
    <link rel="icon" type="image" href="./assets/img/favicon.png" />

    <title>Kalakal: A B2B Wholesale E-Commerce Platform</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="./assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sweetalert2.css')?>" >
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Kalakal.ph</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>homepage_controller/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#newsletter">Newsletter</a>
            </li>
            <li class="nav-item" style="background: orange">
              <img style="float: left; margin: 5px;" src="./assets/img/cart-icon.png" alt="error">
              <a class="nav-link js-scroll-trigger"style="float: right;">Visit Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Cover -->
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Jumpstart your Business</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Kalakal is a B2B wholesale e-commerce platform for entrepreneurs
              looking for goods at the best price</p>
          </div>
        </div>
        <div class="input-group">
          <input type="email" class="form-control" size="50" placeholder="Enter your Email Address" required>
          <div class="input-group-btn" >
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#getstarted">Get Started</a>
          </div>
        </div>
      </form>
      </div>
    </header>

    <!-- Features Section -->
    <section class="bg-primary" id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Everything you need to grow your business</h2>
            <p class="text-white">Kalakal helps small and medium enterprises to manage their business by making most
              of the process online and digital. A simple solution that will help your brand sell more</p>
            <hr class="light my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/store-icon.png" alt="error">
            <h3 style = "color: white">Setup your own store</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/delivery-icon.png" alt="error">
            <h3 style = "color: white">Track package deliveries</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/reports-icon.png" alt="error">
            <h3 style = "color: white">Generate sales reports</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/sales-icon.png" alt="error">
            <h3 style = "color: white">Analyze your sales</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/inventory-icon.png" alt="error">
            <h3 style = "color: white">Monitor your product inventory</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="./assets/img/web-icon.png" alt="error">
            <h3 style = "color: white">Connect with your customers online</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Interested? We'd love to connect</h2>
            <hr class="my-4">
            <p class="mb-5">Be the first to know how our blog and business grow by subscribing to our daily newsletter</p>
          </div>
        </div>

        <form method="post" action="<?php echo base_url();?>newsletter_controller/submitnl">
        <div class="row" >
            <input type="name" name="name"id="name" class="form-control" size="50" style = "margin: 5px" placeholder="Enter your Name" required >
            <input type="email" name="email"id="email" class="form-control" size="50" style = "margin: 5px" placeholder="Enter your Email Address" required>
            <input type="submit" class="btn btn-secondary btn-l js-scroll-trigger" name="submit" value="SUBMIT"/>
        </div>
      </form>
    </section>

    <!-- Footer -->
    <footer class ="bg-secondary" style="padding: 25px; color: WHITE;" >
      <div class="row">
        <div class="col-sm-2">
          <img src= "./assets/img/kalakal-logo2.png" alt="error" style="width:190px;height:40px;">
      	 </div>
         <div class=" col-sm-3">
           <ul class="list-unstyled">
             <h4>Company</h4>
             <li><a href="#">About Us</a></li>
             <li><a href="#">Jobs</a></li>
             <li><a href="#">Legal and Privacy</a></li>
             <li><a href="#">Blog</a></li>
           </ul>
         </div>
         <div class="col-sm-3">
           <ul class="list-unstyled">
             <h4>Services</h4>
             <li><a href="#">Become a Partner</a></li>
             <li><a href="#">Vendors Location</a></li>
             <li><a href="#">Fees</a></li>
           </ul>
         </div>
         <div class="col-sm-3">
           <ul class="list-unstyled">
             <h4>Costumer Support</h4>
             <li><a href="#">Personal</a></li>
             <li><a href="#">Business</a></li>
             <li><a href="#">FAQs</a></li>
             <li><a href="#">Terms and Conditions</a></li>
           </ul>
         </div>
       </div>
       <p><center> Copyright 2018 Kalakal Ph, All rights reserved </center></p>
    </footer>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url('assets/js/success.js'); ?>"> </script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>"> </script>
    <!-- Bootstrap core JavaScript -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./assets/js/jquery.easing.min.js"></script>
    <script src="./assets/js/scrollreveal.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./assets/js/creative.min.js"></script>

  </body>

</html>
