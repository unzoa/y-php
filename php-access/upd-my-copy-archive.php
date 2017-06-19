<?php
header("Content-Type:text/html;charset=utf-8");

$con = mysql_connect("127.0.0.1",'root','');
if (!$con) {
	# code...
	die("cant connect database".mysql_error());
}
mysql_select_db("test",$con);
mysql_query("set names utf8");
/*
 *循环student表，将number字段比较mycopy的number字段，相同则同步archive
 */ 
$res = mysql_query("select * from student");
$my_copy = mysql_query("select * from my_copy");

while ($row = mysql_fetch_array($res)) {
	set_time_limit(0);
	mysql_query('update my_copy set head="'.$row['head'].'" where number= "'.$row['number'].'"');
}	
?>