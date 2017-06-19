<?php
header("Content-Type:text/html;charset=utf-8");

$con = mysql_connect("127.0.0.1",'root','');
if (!$con) {
	# code...
	die("cant connect database".mysql_error());
}

mysql_select_db("my_db",$con);
mysql_query("set names utf8");
$sql = "insert into Persons (FirstName,LastName,Age) values (
	'$_POST[FirstName]',
	'$_POST[LastName]',
	'$_POST[Age]'
)";
if(!mysql_query($sql,$con)){
	die('cant insert database into Persons'.mysql_error());
}
echo "<script>alert(\"1 record added\");window.location.href=\"./insert_table.html\" </script>";
mysql_close($con);
?>