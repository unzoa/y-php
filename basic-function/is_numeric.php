<?php
header("Content-Type:text/html;charset=utf-8");

if(is_numeric('哈哈123')==1){
	echo "r";
}else{
	echo "<script>alert('只能是数字')</script> ";
} 
?>