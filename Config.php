<?php
$mysql_hostname = "mysql16.000webhost.com";//host name
$mysql_user = "a8958556_loga";//user name
$mysql_password = "Sumana_03";//password
$mysql_database = "a8958556_star";//database name
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);

/*if ( !$bd )
{
echo "Error connecting to database.\n";//This is check whether to db connect or not
}
else
{
echo " succesfully connnected" ;
} */
mysql_select_db($mysql_database, $bd);
?>