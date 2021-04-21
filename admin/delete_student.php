<?php
include('../dbconfig.php');
	
	$info=$_GET['student_id'];
	
	mysqli_query($conn,"delete from user where student_id='$info'");
	header('location:dashboard.php?info=display_student');
?>