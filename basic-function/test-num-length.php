<?php
header('contect-type:text/html;charset=utf-8');
$haha1 = '11';
if (strlen($haha1)==1) {
	echo substr(date('Ymd'),2,6).'0000'.$haha1;
}else{
	echo "2wei";
}
?>