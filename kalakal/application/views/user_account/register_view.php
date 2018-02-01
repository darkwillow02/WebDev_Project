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
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
          </li>
          <li class="nav-item" style="background: orange">
              <img style="float: left; margin: 5px;" src="<?php echo base_url('assets/img/cart-icon.png'); ?>" alt="error">
              <a class="nav-link js-scroll-trigger"style="float: right;">Visit Store</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Sign-Up -->
    <section id="register">


          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Sign-Up</h2>
                <hr class="my-4">
                <p class="mb-5">Create an account with us.</p>
              </div>
            </div>

                <div class="col-lg-8 mx-auto">
            <form method="post" action="<?php echo base_url();?>register_controller/registervalidation">
                  <div class="input-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <input  type="text" class="form-control" name="name" size="50" style = "margin: 5px" placeholder="Name" value="" required="required" data-validation-required-message="Please enter your Name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  </div>
                  <div class="input-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <input  type="text" class="form-control" name="address" size="50" style = "margin: 5px" placeholder="Address" value="" required="required" data-validation-required-message="Please enter your Address.">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="input-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <input  type="text" class="form-control" name="username" size="50" style = "margin: 5px" placeholder="Username" value="" required="required" data-validation-required-message="Please enter a username.">
                      <p class="help-block text-danger"></p>
                      </div>
                      </div>
                    <div class="input-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <input type="password" class="form-control" name="password_1" size="50" style = "margin: 5px" placeholder="Password" required="required" data-validation-required-message="Please enter your desired password.">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="input-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <input type="password" class="form-control" name="password_2" size="50" style = "margin: 5px" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter the same password.">
                    <p class="help-block text-danger"></p>
                    </div>
                     </div>
                     <div class="input-group">
                     <div class="form-group floating-label-form-group controls mb-0 pb-2">
                     <input type="email" class="form-control" name="email" size="50" style = "margin: 5px" placeholder="Email Address" value="" required="required" data-validation-required-message="Please enter a email.">
                     <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="input-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <input  type="text" class="form-control" min="1" max="11" name="contact" size="50" style = "margin: 5px" placeholder="Contact" value="" required="required" data-validation-required-message="Please enter a contact number.">
                      <p class="help-block text-danger"></p>
                      </div>
                      </div>
                      <input type="submit" class="btn" name="create_customer" value="Create as Customer">
                      <input type="submit" class="btn" name="create_vendor" value="Create as Vendor">
                      <input type="submit" class="btn" name="create_manufacturer" value="Create as Manufacturer">

                <?php
        					echo '<p class="text-danger">'.$this->session->flashdata("error").'</p>';
        				?>
                <p>
                  Already a member? <a href="login.php">Log-In</a>
                </p>
            </form>
            </div>
        </section>
