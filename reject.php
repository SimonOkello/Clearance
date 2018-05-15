<?php
session_start();
if (isset($_SESSION['reg_no'])) {
	$reg_no=$_SESSION['reg_no'];
}
include "include/db.php";
?>

                        
			<?php
echo $_GET['reg_no'];
      $query = "DELETE FROM request WHERE reg_no = '$reg_no'";
 $result=mysql_query($query, $conn);

 $query2 = "DELETE FROM students WHERE reg_no = '$reg_no'";
 $result=mysql_query($query2, $conn);

echo "<script type='text/javascript'>alert('Profile deleted!!!.The student is not eligible for clearance');window.location.href='adminpage.php'</script>";
?>
                             
                            </div>
                        </div>
                    </div>
                    </div>
		 
		
		