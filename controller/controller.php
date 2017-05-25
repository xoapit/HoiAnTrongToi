
<?php
if(file_exists ('model/article.php')){
	include('model/article.php');	
}else{
	include('../model/article.php');
}

if(file_exists ('model/category.php')){
	include('model/category.php');	
}else{
	include('../model/category.php');
}

if(file_exists ('model/admin.php')){
	include('model/admin.php');	
}else{
	include('../model/admin.php');
}

if(file_exists ('model/feedback.php')){
	include('model/feedback.php');	
}else{
	include('../model/feedback.php');
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
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['description'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
		$articles->append($article); 
	}
	return $articles;
}

function getArticlesByIdCategory($idCategory){
	$articles = new ArrayObject();
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from article where idCategory='".$idCategory."'");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['description'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
		$articles->append($article); 
	}
	return $articles;
}
function getArticlesBySearch($searchContent){
	$articles = new ArrayObject();
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from article where hashtag  like '%".$searchContent."%'");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['description'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
		$articles->append($article); 
	}
	return $articles;
}
function getArticle($idArticle){
	$articles;
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from article where idArticle='".$idArticle."'");
	while($row= mysqli_fetch_assoc($result)){
		$article=new Article($row['idArticle'],$row['title'],$row['content'],$row['description'],$row['image'],$row['idCategory'],$row['hashtag'],$row['author'],$row['publishDate']);
	}
	return $article;	
}

function addArticle($article){
	$conn= getConnect(); 
	$title=$article->getTitle();
	$content=$article->getContent();
	$image=$article->getImage();
	$description=$article->getDescription();
	$idCategory=$article->getIdCategory();
	$hashtag=$article->getHashtag();
	$author=$article->getAuthor();
	$publishDate=$article->getPublishDate();
	$result= mysqli_query($conn,"insert into article (title,content,description,image,idCategory,hashtag,author,publishDate) values(N'".$title."',
		N'".$content."',N'".$description."' ,'".$image."','".$idCategory."',N'".$hashtag."',N'".$author."','".$publishDate."')");
}

function updateArticle($article){
	$conn= getConnect(); 
	$idArticle=$article->getIdArticle();
	$title=$article->getTitle();
	$content=$article->getContent();
	$description=$article->getDescription();
	$image=$article->getImage();
	$idCategory=$article->getIdCategory();
	$hashtag=$article->getHashtag();
	$author=$article->getAuthor();
	$result= mysqli_query($conn,"update article set title=N'".$title."', content=N'".$content."', description=N'".$description."', image='".$image."', 
		hashtag= N'".$hashtag."' , author=N'$author' where idArticle='".$idArticle."'");
}


function deleteArticle($idArticle){
	$conn= getConnect(); 
	$result= mysqli_query($conn,"delete from article where idArticle='".$idArticle."'");
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

function getListCategories(){
	$categories = new ArrayObject();
	$conn= getConnect(); 

	$result= mysqli_query($conn,"select * from category");
	while($row= mysqli_fetch_assoc($result)){
		$category=new Category($row['idCategory'],$row['categoryName']);
		$categories->append($category); 
	}
	return $categories;
}

function getIdCategory($categoryName){
	$idCategory;
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from category where categoryName='".$categoryName."'");
	while($row= mysqli_fetch_assoc($result)){
		$idCategory=$row['idCategory'];
	}
	return $idCategory;
}

function isAdminAccount($admin){
	$conn= getConnect(); 
	$username=$admin->getUsername();
	$password=$admin->getPassword();

	$result= mysqli_query($conn,"select * from admin where username='$username'");
	if($row= mysqli_fetch_assoc($result)){
		$passwordDB=$row["password"];
		$token=$row["token"];
		
		$check = crypt($password, '$2y$12$' . $token);//2y thuat toan ma hoa bcrypt,12 speed 300ms core i7
		if (hash_equals($check, $passwordDB)) {
   			return 'true';
		}
		else {
   			return 'false';
		}
		return 'true';
	}else{		
		return 'false';
	}
}

function getAdmin($username){
	$admin;
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from admin where username='$username'");
	while($row= mysqli_fetch_assoc($result)){
		$username=$row['username'];
		$password=$row['password'];
		$fullname=$row['fullname'];
		$admin = new Admin($username,$password,$fullname);
	}
	return $admin;
}

function updateAdminPassword($username,$password){
	$conn= getConnect(); 
	$result= mysqli_query($conn,"update admin set password='$password' where username='$username'");
}

function updateAdminFullname($username,$fullname){
	$conn= getConnect(); 
	$result= mysqli_query($conn,"update admin set fullname=N'$fullname' where username='$username'");
}

function getListFeedbacks(){
	$feedbacks = new ArrayObject();
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from feedback");
	while($row= mysqli_fetch_assoc($result)){
		$feedback=new Feedback($row['idFeedback'],$row['author'],$row['subject'],$row['content'],$row['time'],$row['phone'],$row['email']);
		$feedbacks->append($feedback); 
	}
	return $feedbacks;
}

function getFeedback($idFeedback){
	$feedback;
	$conn= getConnect(); 
	$result= mysqli_query($conn,"select * from feedback where idFeedback='".$idFeedback."'");
	while($row= mysqli_fetch_assoc($result)){
		$feedback=new Feedback($row['idFeedback'],$row['author'],$row['subject'],$row['content'],$row['time'],$row['phone'],$row['email']);
	}
	return $feedback;
}

function deleteFeedback($idFeedback){
	$conn= getConnect(); 
	$result= mysqli_query($conn,"delete from feedback where idFeedback='".$idFeedback."'");
}

function addFeedback($feedback){

	$conn= getConnect(); 
	$author=$feedback->getAuthor();
	$subject=$feedback->getSubject();
	$content=$feedback->getContent();
	$time=$feedback->getTime();
	$phone=$feedback->getPhone();
	$email=$feedback->getEmail();
	$result= mysqli_query($conn,"insert into feedback (author,subject,content,time,phone,email) values(N'".$author."',
		N'".$subject."',N'".$content."' ,'".$time."','".$phone."',N'".$email."')");
}

?>
