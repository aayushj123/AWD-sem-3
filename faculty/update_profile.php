<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',subject='$prg',semester='$sem', password='$pass' where email='".$_SESSION['faculty_login']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from faculty where email='".$_SESSION['faculty_login']."'");

$res=mysqli_fetch_assoc($con);	

?>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" readonly="true" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Subject:</label>
  <input type="text"  name="prg" value="<?php echo @$res['subject'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  <input type="text"  name="sem" value="<?php echo @$res['semester'];?>" class="form-control" required>
        </div>
    </div>
                  
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>


</div>