<?php
session_start();
if (isset($_SESSION['staff'])) {
	$staffId=$_SESSION['staff'];
}
include "include/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff update</title>
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
         <li><a href="acceptedreq.php">Accepted Requests</a></li>
	<li><a href="#"department.php">Departments</a></li>
	<li><a href="#"staff_details.php">Staff</a></li>
	<li><a href="staffprofile.php">My Profile</a></li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="staflogout.php">Log Out</a></li>
      <li><a href="passstaf.php">Change Password</a></li>
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
    if (isset($_SESSION['staff'])) {
    $staff=$_SESSION['staff'];
  if (isset($_POST['update'])) {

    $staffId=htmlentities($_POST['staffId']);
    $names=htmlentities($_POST['names']);
    $department=htmlentities($_POST['department']);
    $position=htmlentities($_POST['position']);
    $phone_no=htmlentities($_POST['phone_no']);
    $email=htmlentities($_POST['email']);
    $address=htmlentities($_POST['address']);

  $query = "UPDATE staff SET staffId='$staffId', names='$names', position='$position',phone_no='$phone_no',department='$department',email='$email',address='$address' WHERE staffId='$staffId'";

if (mysql_query($query)) {
    echo "<script type='text/javascript'>alert('Profile updated successfully');window.location.href='staffprofile.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Error updating Profile')</script>". mysql_error($conn);
}
}
}else{
  echo "<script type='text/javascript'>alert('You must be logged in to update profile'); window.location.href = 'staff_login.php';</script>";
}

$query="SELECT staffId, names, position, department,phone_no,email, address FROM staff WHERE staffId='$staffId'";
$result_displ=mysql_query($query);
while($row = mysql_fetch_array($result_displ)){

$staffId = $row['staffId'];
$names = $row['names'];
$position = $row['position'];
$department = $row['department'];
$phone_no=$row['phone_no'];
$email = $row['email'];
$address = $row['address'];
?>
<form action="staff_update.php" method="POST" role="form" class="form-horizontal">
<div class="form-group">
    <label class="control-label col-sm-2" for="staffId">StaffID:</label>
    <div class="col-sm-5">
<td><input  type="text" name="staffId" class="form-control" value="<?=$staffId?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="names">Names:</label>
    <div class="col-sm-5">
<td><input type="text"  name="names" class="form-control" value="<?=$names?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="position">Position:</label>
    <div class="col-sm-5">
<td><input type="date"  name="position" class="form-control" value="<?=$position?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-5">
<td><input type="text"  name="department" class="form-control" value="<?=$department?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone_no">Phone Number:</label>
    <div class="col-sm-5">
<td><input type="text" name="phone_no" class="form-control" value="<?=$phone_no?>"</td>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-5">
<td><input type="email" name="email" class="form-control" value="<?=$email?>"</td>
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


