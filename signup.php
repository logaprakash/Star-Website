<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Register for workshop</title>
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
<?php

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("Email is already registered.. Choose a different email..");</script>';
}

?>
		<!-- Header -->
			<header id="header">
				<h1><a href="index.php"><img  style="padding-top:20px" height="60px" width="30px" src="images/logo.png"/>STAR-2012</a></h1>
				 <nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="login.php">Admin Panel</a></li>
                                                <li><a href="droidup.php">Workshop</a></li>
                                                <li><a href="status.php">Check Status</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			
				<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Registration</h2>
						
					</header>

				</div>
			</section>
			
			
			<!-- Form -->
			
						<section>
							
							<form method="post" action="confirmation.php" style="padding-left:250px;padding-right:250px;" >
							
								<div>
								<center>
									<div class="6u 12u$(4)"style="padding-bottom:25px;width:700px">
										<input type="text" name="name" id="name" value="" placeholder="Name" onblur="checkTextField(this);" />
									</div>
									<div class="6u$ 12u$(4)" style="padding-bottom:25px;width:700px">
										<input type="email" name="email" id="email" value="" placeholder="Email"  />
									</div>
									<div class="6u$ 12u$(4)" style="padding-bottom:25px;width:700px">
										<input type="text" name="schoolName" id="schoolName" value="" placeholder="Name of institute or school you studied last "  />
									</div>
										<div class="6u$ 12u$(4)" style="padding-bottom:25px;width:700px">
										<input type="text" name="PhoneNumber" id="PhoneNumber" value="" placeholder="Phone number without code"  />
									</div>
									<div class="12u$" style="padding-bottom:25px;">
										<div class="select-wrapper" style="width:700px">
											<select name="category" id="category" >
												<option value="">Last completed qualification</option>
												<option value="10th or below">10th or below</option>
												<option value="11th or 12th">11th or 12th</option>
												<option value="college-1st year">College-1st year</option>
												<option value="others">Others</option>
											</select>
										</div>
									</div>
									
									<div>
									 <p>
									   <b>Select the workshop you want to join</b>
									 </p>
									 
									<div>
									
									<div class="6u$ 12u$(3)">
									  
										<input type="checkbox" id="Android" name="Android">
										<label for="Android">Android app development</label>
									</div>
									
									<div class="6u$ 12u$(3)" style="float:right;" >
										<input type="checkbox" id="Windows" name="Windows">
										<label for="Windows">Windows app development</label>
									</div>
									
									<div class="6u$ 12u$(3)" style="padding-bottom:25px;float:right;">
										<input type="checkbox" id="Web" name="Web">
										<label for="Web">Web development</label>
									</div>
									
									</div>
									
									</div>
									<br><br><br>
									
									<div class="12u$" style="padding-bottom:25px;width:700px">
										<textarea name="message" id="message" placeholder="Say about yourself in few words" rows="6" ></textarea>
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Register for workshop" class="special" /></li>
										</ul>
									</div>
									</center>
								</div>
							     
							</form>
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