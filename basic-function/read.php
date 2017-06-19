<?php
$con = mysql_connect('127.0.0.1','root','');
if (!$con) {
	# code...
	die("cant coinnect".mysql_error());
}
mysql_query("set names utf8");
mysql_select_db("my_db",$con);
$res = mysql_query("select * from Persons order by Age");
echo "	
	<table>
	<thead>
	<tr>
	<th>FirstName</th>
	<th>LastName</th>
	</tr>
	</thead>
	<tbody>
";
while ($row = mysql_fetch_array($res)) {
	# code...
	echo "
		<tr>
		<td>".$row['FirstName']."</td>
		<td>".$row['LastName']."</td>
		</tr>
	";
}
echo "</tbody>
	</table>";
mysql_close($con);
?>
