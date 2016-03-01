
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
include 'Config.php';

 $username=$_POST['username'];
 $password=$_POST['password'];
 
  $result = mysql_query("SELECT * FROM admin WHERE username = '$username'");
  $row = mysql_fetch_row($result);
  if($row[2] == $password)
  {
	  session_start();
	  $_SESSION['username'] = $username;
	  header("Location: adminpanel.php");
  }
  else
  {
	   $Message='y';
	 header("Location: login.php?Message=" . urlencode($Message));
  }
}
 else
							  
	header("Location: login.php");
							  

?>