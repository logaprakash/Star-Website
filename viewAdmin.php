<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>View admins</title>
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
						<li><a href="viewStudent.php">View all registered students</a></li>
						<li><a href="payment.php">Make payment status</a></li>
						<?php
						session_start();
                                                if(!$_SESSION['username'])
                                                     header("Location:login.php");
						$username=$_SESSION['username'];
						if($username=='logaprakash')
						echo "<li><a href='addDelete.php'>Add/delete admin</a></li>"; 						
						?>
						<li><a href="logout.php" class="button medium">Log out</a></li>						
					</ul>
				</nav>
			</header>
			
				<section id="one" class="wrapper style1 special">
				
				    <div class="container">
					 
					    <header class="major">
						 <form action="adminDetails.php" method="post">
						<h3>All Admins</h3>
                               <table>
						  <tr>
						  
						  <td><b>Profile Picture</b></td>
						  <td><b>Name</b></td>
						  <td><b>Position</b></td>
						  <td><b>View More details</b></td>
						 </tr>
						 
						 
						 <?php
						  include 'Config.php';
						  
						  $lastRow=mysql_query("SELECT id FROM admin_details ORDER BY ID DESC LIMIT 1");
						  $lId=mysql_fetch_array($lastRow);
						  $id=6;
						while($id<=$lId[0]){
						  $fullrow=mysql_query("SELECT name,username,position FROM admin_details WHERE id='$id'");
						  $row=mysql_fetch_array($fullrow);
							 echo 
						  <tr>
						  
						  <td><img style='width: 55px;
                                                    height: 55px;
                                                    border-radius: 50%;
                                                    overflow: hidden;
                                                    padding:5px 4px;' src='images/".$row[1].".jpg'/></td>
						  <td>".$row[0]."</td>
						  <td>".$row[2]."</td>
						 <td><ul class='actions'>
					      	<li><input id='".$row[1]."-submit' type='submit' name='submit' value='About ".$row[1]."' class='special' /></li>
			                       	</ul></td>
						  
						  </tr>";
						 $id++;
						
						  
						  ?>
						 
                          </table>						  
						
						</form>
						
						
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



