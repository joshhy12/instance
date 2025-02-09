<?php
$servername="localhost";
$username="root";
$password="";
$dbname="shalon";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	echo "failed to connect to the database";
}
else
{
	//echo "Database connection successfully";
}
?>
