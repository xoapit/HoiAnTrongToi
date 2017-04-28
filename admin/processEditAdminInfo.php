<?php 
	include '../controller/controller.php';
	$username=$_POST['username'];
	$fullname=$_POST['fullname'];
	updateAdminFullname($username,$fullname);
	echo "Cập nhật thành công";
?>