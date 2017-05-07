<?php
function  getConnect(){
	$conn= mysqli_connect('127.0.0.1:50810','azure','6#vWHD_$','dbhoian') 
	or
	die("No connect!");
	mysqli_query($conn,"SET character_set_results=utf8");
	return $conn;	
}
?>
