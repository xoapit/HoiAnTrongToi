<?php 
	include '../controller/controller.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	updateAdminPassword($username,$password);
	echo "OK";
?>