<?php 
	include '../controller/controller.php';
	$idArticle=$_POST['idArticle'];
	deleteArticle($idArticle);
	echo "Xóa Thành Công";
?>