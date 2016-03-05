<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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

<?php
      session_start();
      if($_SESSION['username'])
 {
      header("Location:adminpanel.php");
 }


?>
        <!-- Header -->
            <header id="header">
                <h1>
                                  <a href="index.php">
                                    <img  style="padding-top:20px" height="60px" width="30px" src="images/logo.png"/>STAR-2012
                                  </a>
                                </h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Back to website</a></li>
                                               
                    </ul>
                </nav>
            </header>

           
            <?php
             if (isset($_GET['Message'])){
            if ($_GET['Message']=='y')           
             print "<script type='text/javascript'> alert("Invalid login details...");</script>";
            if($_GET['Message']=='FY')
             print "<script type='text/javascript'> alert("Your password has been emailed to your account");</script>";
            
             }
           
           
            ?>
           
        <!-- Main -->
                    <section id="one" class="wrapper style1 special">
                      <div class="container">
                        <header class="major">
                          <h2>Admin panel</h2>                         
                        </header>
                      </div>

                  <div style="padding-left:250px;padding-right:250px;" >
                     <form action="admin.php" method="post">
                     <h4>Login</h4>
                         <input type="text" name="username" id="username" value="" placeholder="Username" />
                                               <br>
                         <input type="password" name="password" id="password" value="" placeholder="Password" />
                       
                         
                        <!-- <a href="forgetPassword.php" style="float:right;">forget password</a>--><br><br>
                         <div class="12u$">
                                        <ul class="actions">
                                            <li><input type="submit" value="Login" class="special" /></li><br><br>
                                        </ul>
                                    </div>
                    </form>
                    </div>
                   
                   
                <br><br>
<br>
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
