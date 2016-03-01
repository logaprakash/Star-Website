<?php           
                        session_start() ;
						if($_SESSION['username']=="logaprakash")
						{
							include 'Config.php';
							$user=$_POST['user'];
							$pass=$_POST['pass'];
							$sql = mysql_query("INSERT INTO admin (username, password) VALUES ('$user', '$pass');");
							if($sql)
                            	$Message='AY';
				        }
					    else
								$Message='AN';
							
					    header("Location: addDelete.php?Message=" . urlencode($Message));
					?>