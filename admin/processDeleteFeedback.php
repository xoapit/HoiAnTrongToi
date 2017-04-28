<?php 
	include '../controller/controller.php';
	$idFeedback=$_POST['idFeedback'];
	deleteFeedback($idFeedback);
	echo "Xóa Thành Công";
?>