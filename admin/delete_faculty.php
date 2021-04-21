<?php
include('../dbconfig.php');
	
	$info=$_GET['faculty_id'];
	
	mysqli_query($conn,"delete from faculty where faculty_id='$info'");
	header('location:dashboard.php?info=show_faculty');
?>