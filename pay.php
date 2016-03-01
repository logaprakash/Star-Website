<?php
    include 'Config.php';
    $id = $_POST['user'];
	$button=$_POST['submit'];
	
    if($button=='Make payment')
	{
		$result = mysql_query("SELECT payment FROM registeration WHERE id = '$id'");
		$pay=mysql_fetch_array($result);
		
		if($pay[0]=='PAID')
		{
			$Message='PAD';	
		    header("Location: payment.php?Message=" . urlencode($Message));
		}
		else
		{
			
			$insert=mysql_query("UPDATE registeration SET payment='PAID' WHERE id='$id' ");
			if($insert)
			{
				$Message='PD';	
		        header("Location: payment.php?Message=" . urlencode($Message));
			}
		}
	}
	else
	{
		$result = mysql_query("SELECT payment FROM registeration WHERE id = '$id'");
		$pay=mysql_fetch_array($result);
		
		if($pay[0]=='PAID')
		{
			$delete = mysql_query("UPDATE registeration SET payment='' WHERE id='$id' ");
			if($delete)
			{
				$Message='PC';	
		    header("Location: payment.php?Message=" . urlencode($Message));
			}
				
		}
		else
		{
			
			$Message='PAC';	
		    header("Location: payment.php?Message=" . urlencode($Message));
		}
		
		
	}


?>