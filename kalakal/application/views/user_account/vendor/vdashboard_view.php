<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">

    <title>Vendor Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/dashboard.css'); ?> rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="dashboard_photo/kalakal_logo.png" width="100" height="20" ></a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          </li>
        </ul>
        <a class="nav-link" href="#"> View Store <img src="dashboard_photo/view_logo.png" width="15" height="15"> </a>
          <a class="nav-link" href="#"> User Account </a>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#"> <img src="dashboard_photo/dashboard_logo.png" width="15" height="15"> Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="dashboard_photo/orders_logo.png" width="15" height="15"> Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="dashboard_photo/customers_logo.png" width="15" height="15"> Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="dashboard_photo/products_logo.png" width="15" height="15"> Products</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="#"><img src="dashboard_photo/reports_logo.png" width="15" height="15"> Reports</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="#"><img src="dashboard_photo/settings_logo.png" width="15" height="15"> Settings</a>
            </li>
          </ul>
        </nav>
		</div>
	</div>


		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">

				<div class="jumbotron bg-good">
					<h1>Good Day! User Account</h1>
						<p>Here's what's happening with your store today.</p>
                            <p> </p>
                            <p> </p>
                            <p> </p>
							  <ul style="list-style-type:circle">
                               <li><a href="url">Notification</a></li>
                               <li><a href="url">Notification</a></li>
                               <li><a href="url">Notification</a></li>
							  </ul>
				</div>

				<div class="jumbotron">
                  <div class="row">
                    <div class=" style="background-color:lavender;"></div>


					<div class="container">
                     <div class="jumbotron">
                    <style>
                   </style>

					<div class="row">
                   <div class="col-sm-4"><font size="32">00000</font><br><font size="5"> Orders </font></div>
                   <div class="col-sm-4"><font size="32">00000</font><br><font size="5"> Customers </font></div>
                   <div class="col-sm-4"><font size="32">00000</font><br><font size="5"> Products </font></div>
                     </div>

					</div>
					</div>

				<div class="jumbotron bg-good">
				<div class="container">
                <div class="container">

                <button type="button" class="btn btn-primary btn-lg">Today</button>
                <button type="button" class="btn btn-primary btn-lg">Yesterday</button>
                <button type="button" class="btn btn-primary btn-lg">Last 30 Days</button>
                <button type="button" class="btn btn-primary btn-lg">Last 90 Days</button>
                </div>

                   <div class="jumbotron bg-good">
			       <h4> Visitors </h4>
				   <div class= "jumbotron ">
                   </div>

					<h4> Total Sales </h4>
					<div class="jumbotron ">
					</div>
				</div>
				</div>
	  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
