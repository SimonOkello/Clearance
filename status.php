<?php
session_start();

if (isset($_SESSION['reg_no'])) {
	$reg_no=$_SESSION['reg_no'];
}
include "include/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Status page</title>
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
		<?php
			$query="SELECT  department FROM students WHERE reg_no='$reg_no' ";
			$result=mysql_query($query);
			if ($row=mysql_fetch_array($result)) {
				echo  $row['department']." Department" ;
			}
		?>
		</nav>
		 <br><br><br><br><br>
		<div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Clearance status</h3>
                            </div>
                            <div class="panel-body">
                              <?php
  if (isset($_SESSION['reg_no'])){
  $query="SELECT * FROM clear WHERE reg_no='$reg_no' && status='Cleared'";
$result=mysql_query($query,$conn) or die(mysql());
  if(mysql_num_rows($result)>0){
echo "<script type='text/javascript'>alert('You are cleared.Press OK to print the form'); window.location.href = 'receiptprnt.php';</script>";
}else{
	$query1="SELECT * FROM request WHERE reg_no='$reg_no'";
$result1=mysql_query($query1,$conn) or die(mysql());
  if(mysql_num_rows($result1)>0){
	 echo "<script type='text/javascript'>alert('Your request is being processed. Try again later'); window.location.href = 'students.php';</script>";
}else{
	echo "<script type='text/javascript'>alert('You have not submitted any request for clearance!. Press OK to send a request.'); window.location.href = 'send.php';</script>";
}
}
}else{
  echo "<script type='text/javascript'>alert('You must be logged in to view your request status'); window.location.href = 'student_login.php';</script>";
}
?>
                             
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