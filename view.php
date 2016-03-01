<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Status</title>
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

		<!-- Main -->
				<section id="one" class="wrapper style1 special">
				      <div class="container">
					    <header class="major">
						
						 <?php
                                                  
						 if ($_SERVER['REQUEST_METHOD'] == 'POST')
				                 {
						       include 'Config.php';    
								   
						        $id = $_POST['id'];
				                        $email = $_POST['email'];

                                                        $result = mysql_query("SELECT id,name,email,android,web,windows,payment FROM registeration WHERE id = $id ");
									     
									     $row = mysql_fetch_row($result);
										 if($row[3]=='on')
										 {
										    $row[3]='Android-<b>#DroidUp</b>';
										 }
										 if($row[4]=='on')
										 {
										    $row[4]='Web-<b>#NetRap</b>';
										 }
										 if($row[5]=='on')
										 {
										    $row[5]='Windows-<b>#MiDow</b>';
										 }
if($row[6]=='')
$row[6]="NOT PAID";
										 
								                 if($email == $row[2])
										 {
									      
                                                                                       echo "<h3>Welcome,".$row[1]."</h3>";
                                                                                         echo "<table>
											 
											 <tr>
											 <td><b>ID:</b></td>
											 <td>STARTRZ".$row[0]."</td><br>
											 </tr>
											
									         <tr>
											 <td><b>Email:</b></td><td>"
											 .$row[2]."</td><br>
											 </tr>
											 
									         <tr>
											 <td><b>Registered for:</b></td><td>"
											 .$row[3].",<br>".$row[4].",<br>".$row[5]."</td><br>
											 </tr>
											 
											 <tr>
											 <td><b>Status:</b></td>
											 <td>
											 <h1>
											 ".$row[6]."
											 <h1>
											 </td>
											 <br>
											 </tr>
											 
											 </table><br><p>
											 If any information is entered wrong , click the below button for a change request...</p>
										
										   <br>
											 
												
									        ";
											echo "<a href='contactUs.php'><input type='submit' value='Send Request' class='special'/></a><br><br>";
										 }
									    

                                                                              else
										 {
										         $Message='y';
											 header("Location: status.php?Message=" . urlencode($Message));
										 }

                      
							  }
							  else
							  {
							     header("Location: status.php");
							  }
                        ?>
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



