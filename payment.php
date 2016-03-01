
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Make Payment</title>
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
						<li><a href="viewStudent.php">View registered students</a></li>
						<?php
						session_start();
						if($_SESSION['username']=='logaprakash')
						echo "<li><a href='addDelete.php'>Add/delete admin</a></li>"; 
						
						?>
						<li><a href="logout.php" class="button medium">Log out</a></li>						
					</ul>
				</nav>
			</header>
				<section id="one" class="wrapper style1 special">
				
				    <div class="container">
					 
					    <header class="major">
						
			<?php
			if (isset($_GET['Message'])){
			if ($_GET['Message']=='PD')			
			print "<script type='text/javascript'>alert('Payment done');</script>";
           if ($_GET['Message']=='PAD')			
             print "<script type='text/javascript'>alert('Already paid');</script>";
			 if ($_GET['Message']=='PC')		
            print "<script type='text/javascript'>alert('Payment has been cancelled');</script>";
			if ($_GET['Message']=='PAC')			
			print "<script type='text/javascript'>alert('Payment is not available');</script>";
			}
			?>
						<form action="pay.php" method="post">
						
						<input type="text" name="user" id="user" value="" placeholder="Last three digit of conformation id" /><br><br>
						<ul class="actions">  
						        <li><input id="Make" type="submit" name="submit" value="Make payment" class="special" /></li>
                                <li><input id="Delete" type="submit" name="submit" value="Cancel payment" class="special" /></li>
                        </ul>
										
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



