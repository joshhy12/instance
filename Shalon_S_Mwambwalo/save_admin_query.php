<?php
//require_once'connect.php';
include("data.php");
if(ISSET($_POST['save_admin'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname']; 
	$q_admin=$conn->query("SELECT * FROM `admin` WHERE `username` ='username' ") or die(mysqli_error());
	$q_admin=mysqli_query($conn, "SELECT *FROM `admin` WHERE `username` ='$username'") or die(mysqli_error());
	//$v_admin=mysqli->num_rows;
	$v_admin=mysqli_num_rows($q_admin);
	if($v_admin== 1){

		echo  '
		<script type="text/javascript">
		alert("username already taken");
		window.location="admin.php";
		</script>
		';
	}else{
		//$conn->query("IMSERT INTO `admin` VALUES ('','$usename','password', '$firstname','$middlename','$lastname')") or die(mysqli_error());
		$f_admin=mysqli_query($conn,"INSERT INTO admin(username,password,firstname,middlename,lastname,) VALUES ('username','$password','$firstname','$middlename','$lastname')") or die (mysqli_error());
		// mysqli_query($conn,"INSERT INTO admin(username,password,firstname,middlename,lastname) VALUES ('$username','$password','$firstname','$middlename','$lastname')") or die(mysqli_error());

		//if($f_admin);
		//echo'
		//   <script type="text/javascript">
		//   alert("successfully saved data");
		//  window.location="admin.php";
		//</script>
		//';

		 if($f_admin){
		 	echo "data inserted successfully";
		 }else{
		 	echo"failed to insert data";

		 }

		// }else{
		 //echo "failed to insert admin into the table";
		}
	}
	//}
		
	
	
	
	        