<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="clearance";

$conn=mysql_connect($db_host, $db_user, $db_password) or die("Cannot connect to database");
mysql_select_db($db_name) or die("Cannot select the database");

?>