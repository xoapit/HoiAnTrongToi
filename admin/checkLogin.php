
<?php
session_start() ;
include ('../controller/controller.php');
if(isset($_POST['username'])&&isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$admin= new Admin($username,$password,"");
	$idAdmin=isAdminAccount($admin);
	if($idAdmin=='true'){
		$_SESSION['admin']=$username;
		echo "true";	
	}else{
		echo "<div class='alert alert-danger'> <b>Username or password wrong. Try again!<b></div>";
	}
}
?>