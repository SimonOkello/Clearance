 <?php
 session_start();
if (isset($_SESSION['staff'])) {
	$staffId=$_SESSION['staff'];
}
include('include/db.php');
 
 $pass  = md5($_POST['pass']);
 $query="update students set password = '$pass' where staffId='$staffId'";
 if (mysql_query($query)) {
    echo "<script type='text/javascript'>alert('Password updated successfully');window.location.href='staff_login.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Error updating Password')</script>". mysql_error($conn);
}
 ?>