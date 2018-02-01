    <title>Kalakal: A B2B Wholesale E-Commerce Platform</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/creative.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sweetalert2.css');?>" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>">Kalakal.ph</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#newsletter">Newsletter</a>
            </li>
            <li class="nav-item" style="background: orange">
              <img style="float: left; margin: 5px;" src="<?php echo base_url('assets/img/cart-icon.png');?>" alt="error">
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
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/store-icon.png'); ?>" alt="error">
            <h3 style = "color: white">Setup your own store</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/delivery-icon.png'); ?>" alt="error">
            <h3 style = "color: white">Track package deliveries</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/reports-icon.png'); ?>" alt="error">
            <h3 style = "color: white">Generate sales reports</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/sales-icon.png'); ?>" alt="error">
            <h3 style = "color: white">Analyze your sales</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/inventory-icon.png'); ?>" alt="error">
            <h3 style = "color: white">Monitor your product inventory</h3>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="<?php echo base_url('assets/img/web-icon.png'); ?>" alt="error">
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

        <form method="post" action="<?php echo base_url();?>Newsletter_controller/submit">
        <div class="row" >
            <input type="name" name="name" id="name" class="form-control" size="50" style = "margin: 5px" placeholder="Enter your Name" required >
            <input type="email" name="email" id="email" class="form-control" size="50" style = "margin: 5px" placeholder="Enter your Email Address" required>
            <input type="submit" class="btn btn-secondary btn-l js-scroll-trigger" name="submit" value="SUBMIT"/>
        </div>
      </form>
    </section>
