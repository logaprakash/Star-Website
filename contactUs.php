<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
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
				<h1><a href="index.php"><img  style="padding-top:20px" height="60px" width="30px" src="images/logo.png"/>STAR-2012</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="login.php">Admin Panel</a></li>
<li><a href="droidup.php">Workshop</a></li>
                                                <li><a href="status.php">Check Status</a></li>
						<li><a href="signup.php" class="button medium">Register for workshop</a></li>						
					</ul>
				</nav>
			</header>

		<!-- Main -->
					<section id="three" class="wrapper style3 special">
				      <div class="container">
					    <header class="major">
						  <h2>Contact us</h2>
					    </header>
				      </div>

				  <div class="container 50%">
					 <form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
						<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
						</div>
						  <div class="12u$">
							<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
						  </div>
						     <div class="12u$">
						  		 <ul class="actions">
									<li><input value="Send Message" class="special big" type="submit"></li>
								 </ul>
						      </div>
				        </div>
					</form>
				</div>
			</section>

			<?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                         $name=$_POST["name"];
                         $email=$_POST["email"];
                         $message=$_POST["message"];
                         $message = $message."\n\nName:".$name."\n\n Email:".$email; 

                                   $headers = 
                                       'From: Apptholan@prakashorg.asia' . "\r\n" .
                                       'Reply-To:'.$email. "\r\n";
                                      
                                      

                                        mail('logaprakash98@gmail.com','Feedback request',$message,$headers);



                     
                         echo '<script language= "javascript">';
                         echo 'alert("Thanks for the response.. Sorry for the inconvenice ... We will make sure it wouldn\'t happen again ... ")';
                         echo '</script>';
                          }
                        ?>

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