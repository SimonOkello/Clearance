<?php
session_start();
include "include/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student delete</title>
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
         <li class="active"><a href="students.php"><span class="glyphicon glyphicon-home">Home</span></a></li>
         <li><a href="profile.php">Profile</a></li>
	<li><a href="status.php">Clearance Status</a></li>
	<li><a href="send.php">Send Request</a></li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="logout.php">Log Out</a></li>
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
		if (isset($_SESSION['reg_no'])) {
		$reg_no=$_SESSION['reg_no'];
		if (isset($_POST['submit']) && $_POST['submit'] == "Yes") {

						$query="DELETE FROM students where reg_no='$reg_no'";

if (!mysql_query($query))
{
die('Error: ' . mysql_error($conn));
}else{
echo "<script type='text/javascript'>alert('Profile Deleted');window.location.href = 'student_login.php';</script>";
}
}
}else{
 
}
mysql_close();
?>
Are you sure you want to <strong>delete</strong> your profile?<br>
There is no way to retrieve your <strong>profile</strong> once you confirm!<br>
<form action="student_delete.php" method="POST">
<input type="submit" class="btn btn-primary" name="submit" value="Yes"> &nbsp;
<input type="button" class="btn btn-primary" value=" No " onclick="history.go(-1);">
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

