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
	<title>Staff login</title>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Staff Login form</h3>
                            </div>
                            <div class="panel-body">
                              <?php
  if (isset($_POST['submit'])) {
    $staffId=htmlentities($_POST['staffId']);
    $password=htmlentities($_POST['password']);
    session_regenerate_id();
     $_SESSION['staff']=$staffId;
    if (!empty($staffId)&& !empty($password)) {
      $query="SELECT staffId,password FROM staff WHERE staffId='$staffId'";
      $result=mysql_query($query,$conn);
      $row=mysql_fetch_array($result);

      if (!empty($row)) {
      header("Location:staff_logged.php");
    }else{
      echo "<script type='text/javascript'>alert('StaffID/Password Incorrect.Try again');</script>";
    }
  }else{
   echo "<script type='text/javascript'>alert('Fill the blank fields!.');</script>";
  }
}

  ?>
       <form action="staff_login.php"  method="POST" role="form" class="form-horizontal" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="staffId">StaffID:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="staffId" placeholder="Enter StaffID">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit"  name="submit" class="btn btn-primary">Login</button>
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
