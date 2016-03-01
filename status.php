<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Status</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="The students initiative for students - workshop for this summer on android,web,windows at very low cost-get certified-participate in contest" />
		<meta name="keywords" content="star-2012,apptholan,prakashorg" />
	
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

						<li><a href="contactUs.php">ContactUs</a></li>
						<li><a href="signup.php" class="button medium">Register for workshop</a></li>						
					</ul>
				</nav>
			</header>

			
			<?php
			if (isset($_GET['Message'])) {
             print '<script type="text/javascript">alert("Invalid ID or Email...");</script>';
              }
			
			?>
			
		<!-- Main -->
					<section id="one" class="wrapper style1 special">
				      <div class="container">
					    <header class="major">
						  <h2>Status</h2>
					    </header>
				      </div>

				  <div style="padding-left:250px;padding-right:250px;" >
					 <form action="view.php" method="post">
						 <input type="email" name="email" id="email" value="" placeholder="Registered email id" />
			                                   <br>
			             <input type="text" name="id" id="id" value="" placeholder="Last three digits of confirmation id" /><br><br>
		                 <div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Check Status" class="special" /></li>
										</ul>
									</div>
					</form>
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