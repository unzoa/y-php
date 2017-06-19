<?php
$con = mysql_connect('139.214.116.156','root','x5');
if (!$con) {
	# code...
	die("cant coinnect".mysql_error());
}
mysql_query("set names utf8");
mysql_select_db("test",$con);

$res = mysql_query("select * from student");
$archive = '0';
while ($row = mysql_fetch_array($res)) {
	if ($row['archive']!=='') {
		$archive++;
	}
}
echo $archive.'-用户表,';

$ress = mysql_query("select * from ot_archive");
// $archive = '0';
// while ($row = mysql_fetch_array($res)) {
// 	if ($row['child_id']!=='') {
// 		$archive++;
// 	}
// }
echo mysql_num_rows($ress).'-档案表';

mysql_close($con);
?>