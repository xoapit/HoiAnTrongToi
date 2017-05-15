
<?php 
include '../controller/controller.php';
$title=$_POST['title'];
$urlImage=$_POST['urlImage'];
$articleContent=$_POST['articleContent'];
$idCategory=$_POST['idCategory'];
$description=$_POST['description'];
$hashtag=$_POST['hashtag'];
$author=$_POST['author'];

date_default_timezone_set('Asia/Ho_Chi_Minh');
$today = date('Y/m/d', time());
$publishDate=$today;
$article= new Article("",$title,$articleContent,$description,$urlImage,$idCategory,$hashtag,$author,$publishDate);
addArticle($article);
?>