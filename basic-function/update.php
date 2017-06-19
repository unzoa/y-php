<?php
$con =  mysql_connect('127.0.0.1','root','');
if (!$con) {
	# code...
	die('cant connect'.mysql_error());
}
mysql_select_db("my_db",$con);
mysql_query("update Persons set age='99' where FirstName= 'zoaun'");
mysql_close($con);
?>