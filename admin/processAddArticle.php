
<?php 
include '../controller/controller.php';
$title=$_POST['title'];
$urlImage=$_POST['urlImage'];
$articleContent=$_POST['articleContent'];
$idCategory=$_POST['idCategory'];
$hashtag=$_POST['hashtag'];
$author=$_POST['author'];

date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date('m/d/Y', time());
$publishDate=$today;
$article= new Article("",$title,$articleContent,$urlImage,$idCategory,$hashtag,$author,$publishDate);
addArticle($article);
?>