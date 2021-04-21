<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body >

    <div id="wrapper" >


        <nav style="background:rgb(10,10,100);" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header" style="backgroud:rgb(10,10,100);">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:white;" class="navbar-brand" href="dashboard.php">Student Feedback System</a>
            </div>


            <ul class="nav navbar-top-links navbar-right" >
           
                <li class="dropdown">

                    
                        
                        
                        <li class="divider"></li>
                        <li><a style="color:white;" href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>              
                </li>
            </ul>


            <div style="background:#ccf2ff; color:white;" class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li >
                            <a style="color:rgb(10,10,100); background:#ccf2ff;" href="dashboard.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
						<li>
                            <a style="color:rgb(10,10,100);" href="#"><i class="fa fa-user fa-fw"></i>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a style="color:rgb(10,10,100);" href="dashboard.php?info=add_faculty"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
								 <li>
                                    <a style="color:rgb(10,10,100);" href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li>                           
							</ul>
                        </li>
                        
						<li>
                            <a href="#" style="color:rgb(10,10,100);"><i class="fa fa-user fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
						<li><a style="color:rgb(10,10,100);" href="dashboard.php?info=add_stu"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
                                
								 <li>
                                    <a style="color:rgb(10,10,100);" href="dashboard.php?info=display_student"><i class="fa fa-eye"></i> Manage Student</a>
                                </li> 
							             
							</ul>
                        </li>
						
		<li>
         <a style="color:rgb(10,10,100);" href="#"><i class="fa fa-user fa-book"></i>Feedback<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
                             
<li><a style="color:rgb(10,10,100);" href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> feedback</a></li>
<li><a style="color:rgb(10,10,100);" href="dashboard.php?info=feedback_average"><i class="fa fa-eye"></i> feedback Average</a></li>
	 
							             
							</ul>
                        </li>		   
				        
                    </ul>
                </div>

            </div>

        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                	<?php 
								@$id=$_GET['id'];
								@$info=$_GET['info'];
								if($info!="")
								{
									if($info=="add_faculty")
										{
											include('add_faculty.php');
										}
										
									elseif($info=="show_faculty")
										{
											include('show_faculty.php');
										}
										
										
									elseif($info=="edit_faculty")
										{
											include('edit_faculty.php');
										}	
										
									elseif($info=="display_student")
										{
											include('display_student.php');
										}
									
										
										
										
									elseif($info=="feedback")
										{
											include('feedback.php');
										}
										elseif($info=="feedback_average")
										{
											include('feedback_average.php');
										}	
                                        elseif($info=="add_stu")
										{
											include('add_stu.php');
										}			
								}
								else
								{
								include('dashboard_home.php');
								}
							
							
							?>
				
				</div>

            </div>
            

        </div>


    </div>


    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
