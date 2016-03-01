<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AdminPanel</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>
<?php include_once("analyticstracking.php") ?>
		<!-- Header -->
			<header id="header">
				<h1><a href="adminpanel.php"><img  style="padding-top:20px" height="60px" width="30px" src="images/logo.png"/>STAR-2012</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="viewAdmin.php">View all admin</a></li>
						<li><a href="viewStudent.php">View all registered students</a></li>
						<li><a href="payment.php">Make payment status</a></li>
						<?php
						session_start();
if($_SESSION['username']!=''){
						if($_SESSION['username']=='logaprakash')
						echo "<li><a href='addDelete.php'>Add/delete admin</a></li>"; }
else
header("Location:login.php");
						
                                                 
						?>
						<li><a href="logout.php" class="button medium">Logout</a></li>						
					</ul>
				</nav>
			</header>

		<!-- Main -->
				<section id="one" class="wrapper style1 special">
				 <?php 
                  $username=$_SESSION['username'];
                  echo "<div style='float:right;padding-right:100px;'><center><img style='display:block;
                   width: 55px;
                   height: 55px;
                   border-radius: 50%;
                   overflow: hidden;
                   padding:5px 4px;' src='images/".$username.".jpg'/>
				   </center><h5>Welcome,".$username."</h5>
				   </div>"; 
?>
				      <div class="container">
					 
					    <header class="major">
<center>
<h3 style="padding-left:100px;">Welcome to our admin panel</h3></center><br><br>
<p>You have been selected as per your interest and dedication toward student motivation ... we are joined to make the change..
Here you can view all the registered students ,change payment status of a student and you can also change your profile details which can be viewed by all the admin</p>

<div class="12u$">
										<ul class="actions">
											<li><a href="adminDetails.php"><input type="submit" value="My profile" class="special" /></a>
											<li><a href="viewStudent.php"><input type="submit" value="View all registered students" class="special" /><a>
											<li><a href="payment.php"><input type="submit" value="Make payment status" class="special" /></a>
											 
										</ul>
									</div>
</header>
						</section>
					    	

	

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; Star-2012. All rights reserved.</li>
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook" href="https://www.facebook.com/apptholan"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter" href="https://twitter.com/logaprakash03"><span class="label">Twitter</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
	</body>
</html>



