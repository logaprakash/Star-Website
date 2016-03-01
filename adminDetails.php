<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin details</title>
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
						<?php
					include 'Config.php';
			if (isset($_POST['submit']))
				{
				       
		               $button=$_POST['submit']; 


					  $str=explode(" ",$button);

                                 $username=$str[1];
$url='viewAdmin.php';}
else{
session_start();
if(!$_SESSION['username'])
header("Location:login.php");
$username=$_SESSION['username'];
$url='adminpanel.php';}
						echo '<li><a href="'.$url.'" class="button medium">Back</a></li>';	?>					
					</ul>
				</nav>
			</header>
			<div class="container">
					 
					    <header class="major">
						<br><br>
			
			
			<h3>Profile details</h3><br><br>
		
			<div>
			<?php
				  
			$sql= mysql_query("SELECT name, username, email, position, mobile, whatsapp, facebook FROM admin_details WHERE username='$username'");
			$row= mysql_fetch_array($sql);
			echo '<div style="float:left;padding-left:150px">';
			echo'<h4>Name: '.$row[0].'<br><br>Username: '.$row[1].'<br><br>';
			echo 'Email id: '.$row[2].'<br><br>';
			echo 'Position: '.$row[3].'<br><br>';
			echo 'Mobile number: '.$row[4].'<br><br>';
			echo 'Whatsapp number: '.$row[5].'<br><br></h4>';
			echo '<h4>Social Profile: <a class="icon rounded fa-facebook" href="'.$row[6].'"><span class="label">Facebook</span></a></h4></div>';
			echo '<div style="width:300px;float:right;padding-right:100px">';
			echo '<h4>Profile picture:</h4>';
			echo '<div><img style="display:block;
                   width: 200px;
                   height: 200px;
                   border-radius: 50%;
                   overflow: hidden;
			padding:5px 4px;" src="images/'.$row[1].'.jpg"/></div></div>' ;
				
		
			
			
			?>
			</div>
						</header>
			</div>
			
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			
			
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



