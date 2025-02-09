<?php 
//require_once 'connect.php';
if(!ISSET($_POST['student_no'])){
	echo ' 
	<script type="text/javascript">
	alert("select student name first");
	window.location="borrowing.php";
	</script>
	';
}else{
	if(!ISSET($_POST['selector'])){
		echo '
		<script type="text/javascript">
		alert("select a book first"!);
		window.location="borrowing.php";
		</script>
		';
}else{
	//foreach($_POST['slector'] as $key=>$value){
	//  $book_qty=$value;
	//  $student_no=$_POST['student_no'];
	//  $book_id=$_POST['book_id'][$key];
	//  $date = date["y-m-d",strtotime("+8 HOURS"));
	//  $conn->query(INSERT INTO `borrowing` VALUES ('', '$book_id', '$student_no', '$book_qty','$date','Borrowed')") or die(mysqli_error());
	if(isset($_POST['save_borrow'])){
		$book_id =$_POST['book_id'];
		$student_no=$_POST['student_no'];
		$book_qty=$_POST['book_qty'];
		$date=date("y-m-d",strtotime("+8 hours"));
			$g_borrow = mysqli_query($conn,"INSERT INTO `borrowing` VALUES('','$book_id', '$student_no','$book_qty','$date','Borrowed')");
	}
	if($g_borrow){
		echo '
		<script type="text/javascript">
		alert(successfully Borrowed");
		window.location="borrowing.php"
		</script>
		';
		}else{
			echo "Failed to borrow a book";
		}
	}
}
