<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link href="../clearance/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/custom.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.css.map" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="../clearance/bootstrap/css/bootstrap-theme.min.css.map" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
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
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li class="dropdown-header">Accounts</li>
			<li><a href="student_login.php">Student</a></li>
			<li><a href="staff_login.php">Staff</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li class="dropdown-header">Create account</li>
			<li><a href="student_register.php">Student</a></li>
			<li><a href="staff_register.php">Staff</a></li>
			</ul>
		</li>
		</ul>
		</div>
		</div>
		</nav>
		<br><br><br><br><br><br><br><br>
		<div class="container">
    <div class="row">
      <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>News</h3>
                            </div>
                            <div class="panel-body">
                            <p><marquee>THE SYSTEM WILL OPEN FOR CLEARANCE AS FROM NEXT MONTH!</marquee><br>
		<a href="#">CLICK HERE TO VISIT OUR WEBSITE FOR MORE INFORMATION</a></p>
                             
                            </div>
                        </div>
                    </div>
                    </div>
		 
</div>
<div class="footnote">

</div>
	<div class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container">
	<div class="navbar-text pull-left">
<p>Copyright &copy;2018. All rights reserved.</p>
	</div>
</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../clearance/bootstrap/js/jquery.js"></script>
	<script src="../clearance/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
