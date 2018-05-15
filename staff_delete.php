<?php
session_start();
if (isset($_SESSION['staff'])) {
	$staffId=$_SESSION['staff'];
	include "include/db.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff delete</title>
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
         <li><a href="acceptedreq.php">Accepted Requests</a></li>
	<li><a href="#"department.php">Departments</a></li>
	<li><a href="#"staff_details.php">Staff</a></li>
	<li><a href="staffprofile.php">My Profile</a></li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="staflogout.php">Log Out</a></li>
			<li><a href="pass.php">Change Password</a></li>
			</ul>
		</li>
		</ul>
		</div>
		</nav>
		<br><br><br><br><br>
		<div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Account delete</h3>
                            </div>
                            <div class="panel-body">
                             <?php
		if (isset($_SESSION['staff'])) {
		$staffId=$_SESSION['staff'];
		if (isset($_POST['submit']) && $_POST['submit'] == "Yes") {
			$query="DELETE FROM staff where staffId='$staffId'";

if (!mysql_query($query))
{
die('Error: ' . mysql_error($conn));
}else{
echo "<script type='text/javascript'>alert('Profile Deleted');window.location.href = 'index.php';</script>";
}
}
}else{
 echo "<script type='text/javascript'>alert('You must be logged in to delete profile'); window.location.href = 'staff_login.php';</script>";
}
mysql_close();
?>
Are you sure you want to <strong>delete</strong> your profile?<br>
There is no way to retrieve your <strong>profile</strong> once you confirm!<br>
<form action="staff_delete.php" method="POST">
<input type="submit" name="submit" class="btn btn-primary" value="Yes"> &nbsp;
<input type="button" value=" No " class="btn btn-primary" onclick="history.go(-1);">
</form>
                             
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
	 <script src="../clearance/bootstrap/js/jquery.js"></script>
	<script src="../clearance/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
