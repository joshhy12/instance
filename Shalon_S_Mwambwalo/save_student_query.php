<?php
//require_once'connect.php';
include("data.php");
if (ISSET($_POST['save_student'])) {
	$student_no=$_POST['student_no'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$course=$_POST['course'];
	$section=$_POST['section'];
	//$student=$conn->query("SELECT*FROM `student` WHERE `student_no`=$student_no'")or die(mysqli_error());
	$qstudent=mysqli_query($conn,"SELECT * FROM `student` WHERE `student_no`='$student_no'");
	$vstudent=mysqli_num_rows($qstudent);
	
	if($vstudent['student_no'] ==1)
	{
		echo '
	<script type = "text/javascript">
	alert("student ID already exist");
	window.location = "student.php";
	</script>
	';
	}else{

	
	$lstudent=mysqli_query($conn,"INSERT INTO student(student_no,firstname,middlename,lastname,course,section)
	VALUES('$student_no','$firstname','$middlename','$lastname','$course','$section')");
	echo'   
	<script type="text/javascript">
	 alert("successfully saved data");
	 window.location="student.php";
	 </script>
	 ';
	}
}
?>

