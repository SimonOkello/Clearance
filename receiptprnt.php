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
	<title>Receipt Printing</title>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i>Clearance form</h3>
                            </div>
                            <div class="panel-body">
                            <script language="javascript">
function Clickheretoprint()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25";
  var content_vlue = document.getElementById("print_content").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<html><head><title>ONLINE CLEARANCE SYSTEM</title>');
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');
   docprint.document.write(content_vlue);
   docprint.document.write('</body></html>');
   docprint.document.close();
   docprint.focus();
}
</script>

<center><a href="javascript:Clickheretoprint()" class="btn btn-primary">Print</a>
<div id="print_content" style="width: 400px; align="center" "><br>
<center><img src="../clearance/bootstrap/images/uni.jpg" width="60px" height="60px"></center>
<strong><center>NAME OF THE UNIVERSITY</center></strong>
<strong><center>Clearance Form(ACADEMIC YEAR)</center></strong>
<?php
include('db.php');
$result = mysql_query("SELECT * FROM clear WHERE reg_no='$reg_no'");
		echo"<table class='table table-bordered table-hover table-striped table-responsive'>
<tr>
	<th>RegNumber</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Department</th>
	<th>Clearance RequestDate</th>
	<th>Status</th>

	</tr>";
	while($row=mysql_fetch_array($result)){
	echo "<tr>";
echo "<td>".$row['reg_no']."</td>";
echo "<td>".$row['f_name']."</td>";
echo "<td>".$row['l_name']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['request_date']."</td>";
echo "<td>".$row['status']."</td>";
echo "</tr>";
}
echo "</table>";
echo "<br>";
?>
</center>

                             
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