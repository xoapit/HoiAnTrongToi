
<?php
if(file_exists ('model/article.php')){
	include('model/article.php');	
}else{
	include('../model/article.php');
}
if(file_exists ('connect.php')){
	include('connect.php');	
}else{
	include('../connect.php');
}

function getListArticles(){
	$articles = new ArrayObject();
	$conn= getConnect(); 

	$result= mysqli_query($conn,"select * from article");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
		$articles->append($article); 
	}
	return $articles;
}

function getArticlesByIdCategory($idCategory){
	$articles;
	$conn= getConnect();

	$result= mysqli_query($conn,"select * from article where idCategory='".$idCategory."'");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
	}
	return $article;
}

function getArticle($idArticle){
	$articles;
	$conn= getConnect(); 

	$result= mysqli_query($conn,"select * from article where idArticle='".$idArticle."'");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
	}
	return $article;
}

function addArticle($article){
	$conn= getConnect(); 
	$title=$article->getTitle();
	$content=$article->getContent();
	$image=$article->getImage();
	$idCategory=$article->getIdCategory();
	$hashtag=$article->getHashtag();
	$result= mysqli_query($conn,"insert into article (title,content,image,idCategory,hashtag) values(N'".$title."',
		N'".$content."','".$image."','".$idCategory."','".$hashtag."')");
}

function updateArticle($article){
	$conn= getConnect(); 
	$idArticle=$article->getIdArticle();
	$title=$article->getTitle();
	$content=$article->getContent();
	$image=$article->getImage();
	$idCategory=$article->getIdCategory();
	$hashtag=$article->getHashtag();
	$result= mysqli_query($conn,"update article set title=N'".$title."', content=N'".$content."',' image=".$image."', idCategory='".$idCategory."', hashtag= '".$hashtag."' where idArticle='".$idArticle."')");
}

function getCategoryName($idCategory){
	$categoryName;
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from category where idCategory='".$idCategory."'");
	while($row= mysqli_fetch_assoc($result)){
		$categoryName=$row['categoryName'];
	}
	return $categoryName;
}

function deleteArticle($idArticle){
	$conn= getConnect(); 
	$result= mysqli_query($conn,"delete from article where idArticle='".$idArticle."'");
}

/*
function getListCategories(){
	$categories = new ArrayObject();
	$conn= getConnect(); 

	$result= mysqli_query($conn,"select * from category");
	while($row= mysqli_fetch_assoc($result)){
		$category=new category($row['idCategory'],$row['categoryName']);
		$categories->append($category); 
	}
	return $categories;
}*/
?>