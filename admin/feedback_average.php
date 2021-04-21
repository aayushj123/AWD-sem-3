<form method="post">
<table class="table table-hover">
<tr>

<th> Select Faculty</th>
<td>
<select name="faculty" class="form-control">
	<?php
	$faculty = NULL;
	$sql=mysqli_query($conn,"select * from faculty");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
<td><input name="sub" type="submit" value="Check Average" class="btn btn-success"/></td>
</tr>
</table>
</form>
<hr style="border:1px solid red"/>


<?php
extract($_POST);

$r=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$c=mysqli_num_rows($r);	
echo "<h4>Total Student Attempts : ".$c."</h4>";

error_reporting(1);
$q=mysqli_query($conn,"select * from feedback where faculty_id='$faculty'");
$i = 2;
$avg = 0;
$saveavg = 0;
while($res=mysqli_fetch_array($q)){
	while($i < 16)
	{
		$avg = $avg + $res[$i];
			$i = $i + 1;	
	}
	$i = 2;
	$saveavg = $saveavg + $avg;
}
$saveavg = $saveavg/14 ;

echo "Average Score out of 5:  <u>".$saveavg."</u>";
?>