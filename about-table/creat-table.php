<?php
$con = mysql_connect('127.0.0.1','root','');
if (!$con) {
	# code...
	die('Could not connect: ' . mysql_error());
}else{
	echo "right";
}

//创建表
mysql_select_db('my_db',$con);
$sql = "CREATE TABLE Persons(
	Id int auto_increment primary key,
	FirstName varchar(255),
	LastName varchar(255),
	Age int
	)";
if(mysql_query($sql,$con)){
	echo ",create TABLE success";
}

//关闭数据连接
mysql_close($con);
?>