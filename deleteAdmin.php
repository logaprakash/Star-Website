<?php           
                        session_start() ;
						if($_SESSION['username']=="logaprakash")
						{
							include 'Config.php';
							$user=$_POST['user'];
							$sql = mysql_query("Delete from admin Where username='$user'");
							if($sql)
                            	$Message='DY';
				        }
					    else
								$Message='DN';
							
					    header("Location: addDelete.php?Message=" . urlencode($Message));
					?>
