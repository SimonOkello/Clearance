<?php
session_start();
if (isset($_SESSION['reg_no'])) {
	$reg_no=$_SESSION['reg_no'];
}

include 'include/db.php' ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
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
         <li class="active"><a href="students.php"><span class="glyphicon glyphicon-home">Home</span></a></li>
         <li><a href="profile.php">Profile</a></li>
	<li><a href="status.php">Clearance Status</a></li>
	<li><a href="send.php">Send Request</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="logout.php">Log Out</a></li>
      <li><a href="pass.php">Change Password</a></li>
		</li>
		</ul>
		</div>
		</div>
		</nav>
    <br><br><br><br>
    <div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Student Profile</h3>
                            </div>
                            <div class="panel-body">
                             <?php
if (isset($_SESSION['reg_no'])) {
  $reg_no=$_SESSION['reg_no'];

$query="SELECT * FROM students WHERE reg_no='$reg_no'";
$result=mysql_query($query,$conn) or die(mysql());
      $row=mysql_fetch_array($result);
    
    }else{
      echo "<script type='text/javascript'>alert('You must be logged in to view profile'); window.location.href = 'student_login.php';</script>";
}

  ?>
      <form action="profile.php" method="POST" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="reg_no">RegNumber:</label>
    <div class="col-sm-2">
     <?php echo $row['reg_no']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="f_name">First name:</label>
    <div class="col-sm-2">
     <?php echo $row['f_name']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="l_name">Last name:</label>
    <div class="col-sm-2">
     <?php echo $row['l_name']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-2">
     <?php echo $row['gender']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
    <div class="col-sm-2">
     <?php echo $row['dob']; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-2">
     <?php echo $row['department']; ?>
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
      <button type="button" class="btn btn-primary" value="Update profile" onclick="window.location.href='student_update.php'">Update profile</button>
      <button type="button" class="btn btn-primary" value="Update profile" onclick="window.location.href='student_delete.php'">Delete profile</button>
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


