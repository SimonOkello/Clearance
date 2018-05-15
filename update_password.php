 <?php
 session_start();
 if (isset($_SESSION['reg_no'])) {
  $reg_no=$_SESSION['reg_no'];
}
include('include/db.php');
 
 $pass  = md5($_POST['pass']);
 $query="update students set password = '$pass' where reg_no = '$reg_no'";
 if (mysql_query($query)) {
    echo "<script type='text/javascript'>alert('Password updated successfully');window.location.href='student_login.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Error updating Password')</script>". mysql_error($conn);
}
 ?>