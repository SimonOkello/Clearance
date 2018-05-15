
<?php
if (isset($_SESSION['staff'])) {
	$stafId=$_SESSION['staff'];
}

include "include/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clearance</title>
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
         <li><a href="profile.php">Profile</a></li>
	<li><a href="status.php">Clearance Status</a></li>
	<li><a href="send.php">Send Request</a></li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle" data-toggle="dropdown">Sign Out<b class="caret"></b></a>
			<ul class="dropdown-menu">
			<li><a href="stafflogout.php">Log Out</a></li>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Clearance page</h3>
                            </div>
                            <div class="panel-body">
                             <?php
    if (isset($_POST['clear'])) {
    	$query="INSERT INTO clear (reg_no,f_name, l_name, department, request_date, status) SElECT reg_no,f_name, l_name, department, request_date, status FROM request WHERE status='Accepted'";
		 	if (!mysql_query($query))
		  {
		  die('Error: ' . mysql_error());
		  }else{
		  	echo "<script type='text/javascript'>alert('You have successfully cleared the student(s)'); window.location.href = 'staff_logged.php';</script>";
		  }
      $query = "UPDATE clear SET status = 'Cleared'";
     $result=mysql_query($query,$conn);

     $query1 = "DELETE FROM request WHERE status='Accepted'";
 $result=mysql_query($query1, $conn);


    }else{
    	echo "<script type='text/javascript'>alert('An error occured. Try again'); window.location.href = 'acceptedreq.php';</script>";
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
