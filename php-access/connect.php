<?PHP
/*
 *链接mysql数据库
 */ 
$mysql_con = mysql_connect("127.0.0.1",'root','');
if (!$mysql_con) {
	# code...
	die("cant connect database".mysql_error());
}
mysql_select_db("test",$mysql_con);
mysql_query("set names utf8");
/*
创建ADO连接
*/
$conn = @new COM("ADODB.Connection") or die ("ADO Connection faild.");
$connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("udjdjjdjdiiieie3msmmm32322.mdb");
$conn->Open($connstr);
/*
创建记录集查询
*/
$rs = @new COM("ADODB.RecordSet");
$rs->Open("select * from student",$conn,1,3);
/*
循环读取数据
*/
while(!$rs->eof){
 $new_id = $rs->Fields["id"]->Value;
 $new_number = $rs->Fields["number"]->Value;
 $new_password = $rs->Fields["password"]->Value;

 $sql = "insert into my_copy (id,number,password) values ('$new_id','$new_number','$new_password')";
 set_time_limit(0);
 mysql_query($sql,$mysql_con);
 echo "<br/>";
 $rs->Movenext(); //将记录集指针下移
}
$rs->close();
?>