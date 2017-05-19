<?php 
session_start() ;
if(isset($_SESSION['admin'])){
	unset($_SESSION['admin']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body class="boxLogin">
	<div class="">
		<div class="col-sm-offset-4 col-sm-4 col-xs-12" role="dialog">
			<div class="boxContent boxLoginContent">
				<div class="boxTitleLogin">
					<center>Login to Your Account</center>
				</div>
				<br>
				    <form>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group" id="msgNotice">						
					</div>
					<button type="button" onclick="checkLogin()" class="btn btn-primary pull-right">Login</button>
				</form>
			    </div>
		</div>
	</div>
</body>
</html>

<script>

	function checkLogin(){

		$.post(
			'checkLogin.php',         
			{
				username: $('#username').val(),
				password: $('#password').val()
			},  
			function(result){ 
				if(result.trim()=="true"){
					window.location='index.php';
				}else{
					$('#msgNotice').html(result);
				}
			}, 
			'text'
			);
	}
</script>
