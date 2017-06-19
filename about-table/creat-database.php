<?php
$con = mysql_connect('127.0.0.1','root','');
if (!$con) {
	# code...
	die('Could not connect: ' . mysql_error());
}else{
	echo "right";
}
//建立新的数据库
if(mysql_query("CREATE DATABASE my_db DEFAULT CHARSET utf8 COLLATE utf8_general_ci",$con)){
	echo "created my_db";
}else{
	echo "Could not connect:".mysql_error();
}

//关闭数据连接
mysql_close($con);
?>