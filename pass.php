<?php
session_start();
if (isset($_SESSION['reg_no'])) {
  $reg_no=$_SESSION['reg_no'];
}
include('include/db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change password</title>
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
         <li><a href="#"contact.php">Contacts</a></li>
		<li><a href="#"about.php">About Us</a></li>
		</ul>
		</div>
		</nav>
		<br><br><br><br><br>
		<div class="container">
    <div class="row">
      <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Change Password</h3>
                            </div>
                            <div class="panel-body">
                              <?php
                    $query = mysql_query("select * from students where reg_no = '$reg_no'")or die(mysql_error());
                $row = mysql_fetch_array($query);
                ?>                   
       <form action="update_password.php" method="POST" role="form" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="pass">Current password:</label>
    <div class="col-sm-5">
      <input type="hidden" id="password" name="pass" value="<?php echo $row['pass']; ?> placeholder="Current password"">
      <input type="password" class="form-control" name="pass" placeholder="Current password">
      
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pass">New Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="pass" placeholder="New password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pass">Retype Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="re_pass" placeholder="Repeat password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-primary" onclick="history.go(-1);">Cancel</button>
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
