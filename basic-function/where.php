<?php
$con =  mysql_connect('127.0.0.1','root','');
if (!$con) {
	# code...
	die('cant connect'.mysql_error());
}
mysql_select_db("my_db",$con);
$res  = mysql_query("select * from Persons where FirstName = 'zoaun'");
while ($row = mysql_fetch_array($res)) {
	# code...
	echo $row['FirstName'].' '.$row['LastName'].','.$row['Age'];
}
?>