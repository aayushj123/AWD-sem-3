<?php
error_reporting(1);
	include('../dbconfig.php');
	extract($_POST);
	if(isset($save))
	{	
		
$q=mysqli_query($conn,"select * from user where email='$email'");
	$r=mysqli_num_rows($q);	
	if($r)
	{
	$err="<font color='red'>This email already exists choose diff email.</font>";
	}
	else
	{	
		mysqli_query($conn,"insert into user values('$i','$name','$email','$pass','$sem')");
	
		
	$err="<font color='green'>New Student Successfully Added.</font>";
	}
	
}	

?>


<h1 class="page-header">Add Student</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	   <div class="control-group form-group">
    	<div class="controls">
        	<label>ID:</label>
            	<input type="text" value="<?php echo @$name;?>" name="i" class="form-control" required>
        </div>
   	</div>
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required>
        </div>
   	</div>

 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$email;?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
            	<input type="password" value="<?php echo @$pass;?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  <select name="sem" class="form-control" required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
        </div>
    </div>
                  
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Add New Student">
        </div>
  	</div>
	</form>


</div>