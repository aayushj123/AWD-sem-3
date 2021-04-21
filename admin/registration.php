<?php 
session_start();
$conn=mysqli_connect("localhost","root","","feedback_system")or die(mysqli_error());
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{

$query="insert into user values('$i','$n','$e','$p','$sem')";
mysqli_query($conn,$query);




$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}

?>
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-bottom:50px">
	<caption><h2 align="center">Student Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<tr>
					<td>Student ID:</td>
					<Td><input  type="text" name="i" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Student Full Name:</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Student E-mail:</td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				

				
				<tr>
					<td>Semester:</td>
					<Td><select name="sem" class="form-control" required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
					</td>
				</tr>
				
			

				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save"/>
<input type="reset" value="Reset" class="btn btn-info"/>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>