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
	<title>Profile update</title>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Profile update</h3>
                            </div>
                            <div class="panel-body">
           <?php
    if (isset($_SESSION['reg_no'])) {
    $reg_no=$_SESSION['reg_no'];
  if (isset($_POST['update'])) {

    $f_name=htmlentities($_POST['f_name']);
    $l_name=htmlentities($_POST['l_name']);
    $dob=htmlentities($_POST['dob']);
    $department=htmlentities($_POST['department']);
    $email=htmlentities($_POST['email']);
    $address=htmlentities($_POST['address']);

  $query = "UPDATE students SET f_name='$f_name', l_name='$l_name',dob='$dob',department='$department',email='$email',address='$address' WHERE reg_no='$reg_no'";

if (mysql_query($query)) {
    echo "<script type='text/javascript'>alert('Profile updated successfully');window.location.href='profile.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Error updating Profile')</script>". mysql_error($conn);
}
}
}else{
  echo "<script type='text/javascript'>alert('You must be logged in to update profile'); window.location.href = 'student_login.php';</script>";
}

$query="SELECT f_name, l_name, dob, department, email, address FROM students WHERE reg_no='$reg_no' ";
$result_displ=mysql_query($query);
while($row = mysql_fetch_array($result_displ)){

$f_name = $row['f_name'];
$l_name = $row['l_name'];
$dob = $row['dob'];
$department = $row['department'];
$email = $row['email'];
$address = $row['address'];
?>
<form action="student_update.php" method="POST" role="form" class="form-horizontal">
<div class="form-group">
    <label class="control-label col-sm-2" for="f_name">First name:</label>
    <div class="col-sm-5">
<td><input  type="text" name="f_name" class="form-control" value="<?=$f_name?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="l_name">Last name:</label>
    <div class="col-sm-5">
<td><input type="text"  name="l_name" class="form-control" value="<?=$l_name?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
    <div class="col-sm-5">
<td><input type="date"  name="dob" class="form-control" value="<?=$dob?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-5">
<td><input type="text"  name="department" class="form-control" value="<?=$department?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-5">
<td><input type="text" name="email" class="form-control" value="<?=$email?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Adress:</label>
    <div class="col-sm-5">
<td><input type="text"  name="address" class="form-control" value="<?=$address?>"</td>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-primary" name="update">Update</button>
      <button type="button" class="btn btn-primary" onclick="history.go(-1);">Back</button>

    </div>
  </div>
</form> 

<?php }?>

                             
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
