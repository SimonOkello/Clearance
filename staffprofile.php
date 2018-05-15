<?php
session_start();
if (isset($_SESSION['staff'])) {
	$staffId=$_SESSION['staff'];
}

include 'include/db.php' ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff profile</title>
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
         <span class="sr-only">Toggle Navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
        <a class="navbar-brand" href="#"><marquee>ONLINE CLEARANCE SYSTEM</marquee></a>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         <li class="active"><a href="staff_logged.php"><span class="glyphicon glyphicon-home">Home</span></a></li>
         <li><a href="acceptedreq.php">Accepted Requests</a></li>
	<li><a href="staffprofile.php">My Profile</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Staff profile</h3>
                            </div>
                            <div class="panel-body">
                             <?php
if (isset($_SESSION['staff'])) {
  $staffId=$_SESSION['staff'];

$query="SELECT * FROM staff WHERE staffId='$staffId'";
$result=mysql_query($query,$conn) or die(mysql());
      $row=mysql_fetch_array($result);
    }else{
      echo "<script type='text/javascript'>alert('You must be logged in to view profile'); window.location.href = 'staff_login.php';</script>";
}

  ?>
   <form action="staffprofile.php" method="POST" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="staffId">StaffID:</label>
    <div class="col-sm-2">
     <?php echo $row['staffId']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="names">Names:</label>
    <div class="col-sm-2">
     <?php echo $row['names']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-2">
     <?php echo $row['department']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="position">Position:</label>
    <div class="col-sm-2">
     <?php echo $row['position']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone_no">Phone Number:</label>
    <div class="col-sm-2">
     <?php echo $row['phone_no']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-2">
     <?php echo $row['email']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-2">
     <?php echo $row['address']; ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="button" class="btn btn-primary" value="Update profile" onclick="window.location.href='staff_update.php'">Update profile</button>
      <button type="button" class="btn btn-primary" value="Update profile" onclick="window.location.href='staff_delete.php'">Delete profile</button>
    </div>
  </div>
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
