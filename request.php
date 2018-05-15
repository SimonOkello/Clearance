<?php
session_start();
if (isset($_SESSION['reg_no'])) {
	$reg_no=$_SESSION['reg_no'];
}
include "include/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../clearance/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../clearance/bootstrap/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../clearance/bootstrap/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../clearance/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="../clearance/bootstrap/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminlogged.php"> System Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="adminlogout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="adminlogged.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="request.php"><i class="fa fa-fw fa-list-alt"></i>New Requests</a>
                    </li>
                    <li>
                        <a href="department.php"><i class="fa fa-fw fa-building-o"></i> Departments</a>
                    </li>
                    <li>
                        <a href="staff_details.php"><i class="fa fa-fw fa-edit"></i> Staff</a>
                    </li>
                    <li>
                        <a href="student_details.php"><i class="fa fa-fw fa-desktop"></i>Students</a>
                    </li>
                    <li>
                        <a href="cleared_students.php"><i class="fa fa-fw fa-desktop"></i>Cleared Students</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Control Center</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Clearance requests
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
             <div class="row">
                    <div class="col-lg-3 col-md-6">
                      <?php
$query="SELECT id, reg_no, f_name,department,message,request_date,status FROM request WHERE status='Pending'";
$result=mysql_query($query,$conn) or die(mysql());
if(mysql_num_rows($result)>0){

echo"<table class='table table-bordered table-hover table-striped table-responsive'>
<tr>
<th>Id</th>
	<th>RegNumber</th>
	<th>First Name</th>
	<th>Department</th>
	<th>Message</th>
	<th>RequestDate</th>
	<th>Status</th>
	<th>Accept</th>
	<th>Reject</th>
	</tr>";
	while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['reg_no']."</td>";
echo "<td>".$row['f_name']."</td>";
echo "<td>".$row['department']."</td>";
echo "<td>".$row['message']."</td>";
echo "<td>".$row['request_date']."</td>";
echo "<td>".$row['status']."</td>";
echo "<td><a href='accept.php?id=".$row['id']."'><button class='btn btn-info btn-lg'><span class='glyphicon glyphicon-check'></span></button></a></td>";
echo "<td><a href='reject.php?id=".$row['id']."'><button class='btn btn-danger btn-lg'><span class='glyphicon glyphicon-remove'></span></button></a></td><tr>";
}
echo "</tr>";
}else{
		echo "<script type='text/javascript'>alert('There are no new requests'); window.location.href = 'adminpage.php';</script>";
	}
echo "</table>";
echo "<br>";
?>     
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    

    <!-- jQuery -->
    <script src="../clearance/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../clearance/bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../clearance/bootstrap/js/plugins/morris/raphael.min.js"></script>
    <script src="../clearance/bootstrap/js/plugins/morris/morris.min.js"></script>
    <script src="../clearance/bootstrap/js/plugins/morris/morris-data.js"></script>
<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
    <div class="navbar-text pull-left">
    <p>Copyright &copy;2018. All rights reserved.</p>
    </div>
</div>
</div>
</body>

</html>
