<h1 align="center" style="text-decoration:underline; color:rgb(10,10,100);">Admin Dashboard</h1>
<?php 

$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Total Number of Faculty : $rows</h2>";	


$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange'>Total Number of Student : $r1</h2>";	


$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:rgb(10,10,100);'>Total Number feedback given by users  : $r2</h2>";	

?>