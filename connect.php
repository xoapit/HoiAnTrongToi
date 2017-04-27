<?php
function  getConnect(){
	$conn= mysqli_connect('localhost','root','','dbhoian') 
	or
	die("No connect!");
	mysqli_query($conn,"SET character_set_results=utf8");
	return $conn;	
}
?>