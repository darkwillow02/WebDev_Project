    <title>Kalakal: A B2B Wholesale E-Commerce Platform</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/creative.min.css'); ?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url();?>">Kalakal.ph</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
              <a class="nav-link" href="<?php echo base_url();?>register">Register</a>
            </li>
            <li class="nav-item" style="background: orange">
              <img style="float: left; margin: 5px;" src="<?php echo base_url('assets/img/cart-icon.png'); ?>" alt="error">
              <a class="nav-link js-scroll-trigger"style="float: right;">Visit Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Login -->
<section id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Log-In</h2>
            <hr class="my-4">
            <p class="mb-5">Buy Goods.</p>
          </div>
        </div>

                <div class="col-lg-8 mx-auto">
                <form method="post" action="<?php echo base_url();?>login_controller/loginvalidation">


                  <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                          <input type="text" name= "username" size="50" style = "margin: 5px" placeholder="Username" >
                            <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                          <input type="password" name="password" size="50" style = "margin: 5px" placeholder="Password" >
                            <p class="help-block text-danger"></p>
                      </div>
                </div>
                <input type="submit" class="btn" name="login_customer" value="Login as Customer">
                <input type="submit" class="btn" name="login_vendor" value="Login as Vendor">
                <input type="submit" class="btn" name="login_manufacturer" value="Login as Manufacturer">
                <p>
                      Not yet a member? <a href="">Sign-up</a>
                </p>
              </form>
            </div>
          </div>
    </section>
