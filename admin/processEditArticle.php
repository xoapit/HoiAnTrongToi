<?php 
include '../controller/controller.php';
$idArticle=$_POST['idArticle'];
$title=$_POST['title'];
$urlImage=$_POST['urlImage'];
$description=$_POST['description'];
$articleContent=$_POST['articleContent'];
$idCategory=" ";
$hashtag=$_POST['hashtag'];
$author=$_POST['author'];
$publishDate="";
$article= new Article($idArticle,$title,$articleContent,$description,$urlImage,$idCategory,$hashtag,$author,$publishDate);
updateArticle($article);
echo "Update thành công";
?>