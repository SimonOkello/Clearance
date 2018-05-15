<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacts</title>
	<link href="../clearance/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/custom.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.css.map" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.min.css.map" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<div class="container">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle Navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
        <a class="navbar-brand" href="#"><marquee>ONLINE CLEARANCE SYSTEM</marquee></a>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home">Home</span></a></li>
         <li><a href="contacts.php">Contacts</a></li>
		<li><a href="about.php">About Us</a></li>
		</ul>
		</div>
		</nav>
		<br><br><br><br><br>
		<div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Contact Us</h3>
                            </div>
                            <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                             
                            </div>
                        </div>
                    </div>
                    </div>
		 
</div>
	<div class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container">
	<div class="navbar-text pull-left">
<p>Copyright &copy;2018. All rights reserved.</p>	
</div>
</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../clearance/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../clearance/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../clearance/bootstrap/js/contact_me.js"></script>
    <script src="../clearance/bootstrap/js/jquery.js"></script>

    <!-- Theme JavaScript -->
    <script src="../clearance/bootstrap/js/agency.min.js"></script>
</body>
</html>
