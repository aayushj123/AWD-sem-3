<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:rgb(10,10,100)">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online feedback System</a>
				
				
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>



          
          <li><a href="index.php?info=login" style="color:#FFFFFF">Student</a></li>
		  <li><a href="index.php?info=faculty_login" style="color:#FFFFFF">Faculty</a></li> 
          <li><a href="admin" style="color:#FFFFFF">Admin</a></li> 


					 	
					
                   

                </ul>
            </div>
        </div>
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{			 
						 if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }

					}
					else
					{
				?>

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/1.jpeg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/2.jpeg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/3.jpeg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
		

    <div class="container" style="backgroud:rbg(0,0,0,0)">

        <div class="row">
            <div style="margin-left:30%;">
  
				<h1> <b> STUDENT FEEDBACK SYSTEM </b></h1>
            <div style="margin-left:40%;">

				For students of <i> BEST  </i>university
            </div>

				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:rgb(10,200,240);">
		<span style="color:#FFFFFF">Made by Aayush Jha and Aditya Kumar</span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>


    <script>
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
