<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Confirmation</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
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
						<li><a href="index.php">Back to home</a></li>
						
					</ul>
				</nav>
			</header>
			<section id="one" class="wrapper style1 special">
				<div class="container">
				
					<header class="major">
						
					
				
				
		<?php   
		    if ($_SERVER['REQUEST_METHOD'] == 'POST')
		      {
                                   include 'Config.php';
			       
				$name = $_POST['name'];
				 $email = $_POST['email'];
				  $phone = $_POST['PhoneNumber'];
				   $last_studied = $_POST['schoolName'];
				    $qualification = $_POST['category'];
				     $android = $_POST['Android'];
				      $windows = $_POST['Windows'];
				       $web = $_POST['Web'];
				        $about_you = $_POST['message'];
                                
                                   $total='';

	                        if($android!='')
                                {
                                  $total = "ANDROID ";
                                }

                                 if($windows!='')
                                {
                                  $total = $total." ,WINDOWS ";
                                }

	                         if($web!='')
                                {
                                  $total = $total." ,WEB";
                                } 

			             $result = mysql_num_rows(mysql_query("SELECT * FROM registeration WHERE email = '$email'"));

				if($result == 1)
				{
                                        
					header("Location: signup.php?Message=" . urlencode("tae"));
				}

				else
				{
				      echo "<h2>Confirmation</h2><p>Thanks for registering for apptholan 2015</p>";

			         mysql_query("
                                  INSERT INTO registeration 
                                   (name, email, phone_number, last_studied, qualification, android, windows, web, about_you) 

                                  VALUES 
                                   ('$name', '$email', '$phone', '$last_studied', '$qualification', '$android', '$windows', '$web', '$about_you')");
					

                                       $id = mysql_insert_id();
					
                                      echo "<center><table>
					<tr>
					<td>NAME :</td><td>$name</td>
					</tr>
					
					<tr>
					<td>REGISTERED EMAIL :</td><td>$email</td>
					</tr>
					
					<tr>
					<td>ID:</td><td><b><h1>STARTRZ$id</h1><b></td>
					</tr>


                                        <tr>
					<td>MOBILE NUMBER :</td><td>$phone</td>
					</tr>

                                        <tr>
					<td>LASTLY STUDIED :</td><td>$last_studied</td>
					</tr>
                                       
                                        <tr>
					<td>REGISTERED FOR :</td><td>$total</td>
					</tr>
					
                                        <tr>
					<td>QUALIFICATION :</td><td>$qualification</td>
					</tr> #close tag for tr in table
					
					</table></center><br>
					<b>NOTE:</b>Take a print out this conformation and bring it for the workshop for verification.. 
                                        <br>Date and Venue will be confirmed to you through mail and sms.. Keep updated<br>
                                        Registration fee must be paid before the start of workshop... <br>
                                        ";


                                      $message ="<b>Dear ".$name."</b>,
                                          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
                                        Thanks for registering in APPTHOLAN - 2015...
                                         The venue , date and time will be communicated to you either through mail or sms .. so be updated<br>
                                          <b>Note:</b>Registration fee must be paid before the start of workshop...
                                           <center>Your confirmation id is <b> STARTRZ".$id."</b>
                                            <br><br><br>
                                           Regards,<br>
                                          STAR-2012<br> www.prakashorg.asia</center>";
			               
                                      $headers = 
                                       'From: Apptholan@prakashorg.asia' . "\r\n" .
                                       'Reply-To: logaprakash99@gmail.com'."\r\n".
                                       'Content-Type: text/html; charset=ISO-8859-1\r\n'."\r\n";
                                      

                                        mail($email,'Confirmation',$message,$headers);
                                        
                                     
				}
}
                                else
				{
					   header("Location: signup.php");
				}
?>
                              <INPUT TYPE="button" value="Print this page" onClick="window.print()">


				   </header>
		            </div> <!-- close tag for div-->
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
