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
  <title>Send request</title>
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
    <br><br><br>
    <div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Clearance request form</h3>
                            </div>
                            <div class="panel-body">
                 <?php
  if (isset($_SESSION['reg_no'])) {
    $reg_no=$_SESSION['reg_no'];
if (isset($_POST['submit'])) {
  $reg_no=htmlentities($_POST['reg_no']);
  $f_name=htmlentities($_POST['f_name']);
  $l_name=htmlentities($_POST['l_name']);
$department=htmlentities($_POST['department']);
$request_date=htmlentities($_POST['request_date']);
$message=htmlentities($_POST['message']);
if (!empty($f_name)&& !empty($department)&& !empty($request_date)&& !empty($reg_no)&& !empty($l_name)&& !empty($message)) {
  $query="SELECT * FROM request WHERE reg_no='$reg_no'";
  $result=mysql_query($query,$conn);
  $row=mysql_fetch_array($result);
  if (!empty($row)) {
    echo "<script type='text/javascript'>alert('You cannot send clearance request twice!');window.location.href = 'students.php';</script>";
  }else{
  $query="INSERT INTO request (reg_no,  f_name, l_name, department, request_date,message)VALUES('$reg_no','$f_name','$l_name','$department', '$request_date','$message')";
      if (!mysql_query($query))
      {
      die('Error: ' . mysql_error());
      }else{
        echo "<script type='text/javascript'>alert('You have sent your request successfully.');window.location.href='students.php'</script>";
  }
}
}else{
echo "<script type='text/javascript'>alert('Fill in the blank fields');</script>";
}
}
}else{
  echo "<script type='text/javascript'>alert('You must be logged in to send clearance request'); window.location.href = 'student_login.php';</script>";
}

  ?>
   <form action="send.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="reg_no" maxlength="16">RegNumber:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="reg_no" placeholder="Reg no">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="f_name">First Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="f_name" placeholder="First name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="l_name">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="l_name" placeholder="Last name">
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
    <label class="control-label col-sm-2" for="request_date">RequestDate:</label>
    <div class="col-sm-6">
      <input type="date" class="form-control" name="request_date" placeholder="RequestDate">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="message">Message:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="message" placeholder="Enter message">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
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
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../clearance/bootstrap/js/jquery.js"></script>
  <script src="../clearance/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
