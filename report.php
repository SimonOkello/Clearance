<?php

//connect the database
$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('clearance', $conn)or die(mysql_error());

//Enter the headings of the excel columns
$contents="REGISTRATION NUMBER,FIRST NAME,LAST NAME, DEPARTMENT, CLEARANCE STATUS, CLEARANCE DATE\n";




$user_query = mysql_query(" SELECT 	reg_no,f_name,l_name,department,status,cleared_On FROM clear") or die(mysql_error());





//Mysql query to get records from datanbase


//While loop to fetch the records
while($row = mysql_fetch_array($user_query))
{
$contents.=$row['reg_no'].",";
$contents.=$row['f_name'].",";
$contents.=$row['l_name'].",";
$contents.=$row['department'].",";
$contents.=$row['status'].",";
$contents.=$row['cleared_On']."\n";
}

// remove html and php tags etc.
$contents = strip_tags($contents); 

//header to make force download the file
header("Content-Disposition: attachment; filename=Clearance_Report.xls".date('d-m-Y').".csv");
print $contents;

//For more examples related PHP visit www.webinfoipedia.com and enjoy demo and free download..
?>