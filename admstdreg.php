<?php
session_start();

include 'include/db.php' ;
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator<b class="caret"></b></a>
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
                        <a href="adminpage.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                                <i class="fa fa-dashboard"></i> Student registration
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-xs-10">
                       <?php
  if (isset($_POST['submit'])) {
    $reg_no=htmlentities($_POST['reg_no']);
  $password=htmlentities($_POST['password']);
  $f_name=htmlentities($_POST['f_name']);
  $l_name=htmlentities($_POST['l_name']);
  $dob=htmlentities($_POST['dob']);
  $gender=htmlentities($_POST['gender']);
  $department=htmlentities($_POST['department']);
  $phone_no=htmlentities($_POST['phone_no']);
  $email=htmlentities($_POST['email']);
  $address=htmlentities($_POST['address']);

    if (!empty($reg_no) && !empty($password)&& !empty($f_name)&&!empty($l_name)&& !empty($dob)&& !empty($gender)&& !empty($department)&&!empty($phone_no)&& !empty($email)&&!empty($address)) {
      $query="SELECT * FROM students WHERE reg_no ='$reg_no'";
      $result=mysql_query($query,$conn);
      $row=mysql_fetch_array($result);
      if (!empty($row)) {
        echo "<script type='text/javascript'>alert('The student already exists')</script>";
      }else{
      $query="INSERT INTO students (reg_no, password, f_name, l_name, dob, gender, department, phone_no, email, address)VALUES('$reg_no',md5('$password'), '$f_name', '$l_name', '$dob', '$gender', '$department', '$phone_no', '$email','$address')";
      if (!mysql_query($query))
      {
      die('Error: ' . mysql_error());
      }else{
        echo "<script type='text/javascript'>alert('You have successfully added new Student.');window.location.href='adminpage.php'</script>";
  }
  }

    }else{
      echo "<script type='text/javascript'>alert('Fill the blank fields')</script>";
    }
    }
    mysql_close($conn)



   ?>

       <form action="admstdreg.php" method="POST" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="reg_no">RegNumber:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="reg_no" placeholder="Reg no">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="f_name">First name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="f_name" placeholder="First name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="l_name">Last name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="l_name" placeholder="Last name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
    <div class="col-sm-6">
      <input type="date" class="form-control" name="dob" placeholder="Date of birth">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="gender">Gender:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="gender" placeholder="Enter gender">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="department" placeholder="Department">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone_no">Phone number:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="phone_no" placeholder="Enter phone number">
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
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>  
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
</body>

</html>
