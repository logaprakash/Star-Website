<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Add/Delete Admin</title>
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

		<!-- Header -->
			<header id="header">
				<h1><a href="adminpanel.php"><img  style="padding-top:20px" height="60px" width="30px" src="images/logo.png"/>STAR-2012</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="adminpanel.php">Home</a></li>
<li><a href="viewAdmin.php">View Admins</a></li>
						<li><a href="viewStudent.php">View all registered students</a></li>
						<li><a href="payment.php">Make payment status</a></li>
						<li><a href="logout.php" class="button medium">Logout</a></li>		
												
					</ul>
				</nav>
			</header>

			
			<?php
			if (isset($_GET['Message'])){
			if ($_GET['Message']=='AY')			
			print "<script type='text/javascript'>alert('Admin added');</script>";
           if ($_GET['Message']=='AN')			
             print "<script type='text/javascript'>alert('Access Denied');</script>";
			 if ($_GET['Message']=='DY')		
            print "<script type='text/javascript'>alert('Admin Delete');</script>";
			if ($_GET['Message']=='DN')			
			print "<script type='text/javascript'>alert('Access Denied');</script>";
			}
			?>
			
			
			
		<!-- Main -->
					<section id="one" class="wrapper style1 special">
					 <?php
 session_start();
 $username=$_SESSION['username'];
if($username!=''){
echo "<div style='float:right;padding-right:100px;'><center><img style='display:block;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            overflow: hidden;
            padding:5px 4px;' src='images/".$username.".jpg'/></center><h5>Welcome,<br>".$username."</h5></div>"; }
else
header("Location:login.php");
?>
				      <div class="container">
					    <header class="major">
						
						  <h3>Add/Delete admin</h3>
						  <br><h4>(Access only for head)</h4>
					    
                    <div style="float:left;width:600px">
				
					<form action="addAdmin.php" method="post"  >
					<h4>Add an admin</h4>
					   <input type="text" name="user" id="user" value="" placeholder="Username" /> <br>
					   <input type="password" name="pass" id="pass" value="" placeholder="Password" /><br>
					   
					<ul class="actions">
					                        
											<li><input type="submit" value="Add Admin" class="special" /></li>
										</ul>
					</form>
					</div>
					
					<div>
					
					<form action="deleteAdmin.php" method="post" style="padding-left:650px;">
					   <h4>Delete an admin</h4>
					   <input type="text" name="user" id="user" value="" placeholder="Username" /><br>					   
					<ul class="actions">
					                        
											<li><input type="submit" value="Delete admin" class="special" /></li>
										</ul>
					</form>
					</div>

 </header>
				      </div>
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