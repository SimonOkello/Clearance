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
	<title>Student Registration</title>
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
         <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home">Home</span></a></li>
         <li><a href="#"contact.php">Contacts</a></li>
		<li><a href="#"about.php">About Us</a></li>
		</ul>
		</div>
    </div>
		</nav>
    <br><br><br><br><br>
    <div class="container">
    <div class="row">
      <div class="col-xs-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Staff registration</h3>
                            </div>
                            <div class="panel-body">
                             <?php
  if (isset($_POST['submit'])) {
    $staffId=htmlentities($_POST['staffId']);
  $password=htmlentities($_POST['password']);
  $names=htmlentities($_POST['names']);
  $department=htmlentities($_POST['department']);
  $position=htmlentities($_POST['position']);
  $phone_no=htmlentities($_POST['phone_no']);
  $email=htmlentities($_POST['email']);
  $address=htmlentities($_POST['address']);

    if (!empty($staffId) && !empty($password)&& !empty($names) && !empty($position) && !empty($department)&&!empty($phone_no)&& !empty($email)&&!empty($address)) {
      $query="SELECT * FROM staff WHERE staffId ='$staffId'";
      $result=mysql_query($query,$conn);
      $row=mysql_fetch_array($result);
      if (!empty($row)) {
        echo "<script type='text/javascript'>alert('The user already exists')</script>";
      }else{
      $query="INSERT INTO staff (staffId, password, names, position, department, phone_no, email, address)VALUES('$staffId',md5('$password'), '$names', '$position', '$department', '$phone_no', '$email','$address')";
      if (!mysql_query($query))
      {
      die('Error: ' . mysql_error());
      }else{
        echo "<script type='text/javascript'>alert('You have registered successfully.You can now login');window.location.href='staff_login.php'</script>";
  }
  }

    }else{
      echo "<script type='text/javascript'>alert('Fill the blank fields')</script>";
    }
    }
    mysql_close($conn)



   ?>
       <form action="staff_register.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="staffId">StaffID:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="staffId" placeholder="staff id">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control"  name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="names">Names:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control"  name="names" placeholder="Names">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-6">
      <select name="department" class="form-control">
            <option selected="selected" value="">select your department</option>
            <option>Business</option>
            <option>IT</option>
          </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="position">Position:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="position" placeholder="Position">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="gender" placeholder="Enter gender">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone_no">Phone number:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" pattern="^(([0-9]*)|(([0-9]*)\.([0-9]*)))$"  name="phone_no" placeholder="Phone no.">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="address" placeholder="Enter address">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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


