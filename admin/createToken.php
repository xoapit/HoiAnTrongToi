<form action="" method="post">
	<input type="text" name="pass" />
	<input type="submit" name="btnSubmit" value="Generate" />
</form>

<?php 
if(isset($_POST["pass"])){
	$pass=$_POST["pass"];

		// salt for bcrypt needs to be 22 base64 characters (but just [./0-9A-Za-z]), see http://php.net/crypt
	$salt = substr(strtr(base64_encode(openssl_random_pseudo_bytes(22)), '+', '.'), 0, 22);
		// 2y is the bcrypt algorithm selector, see http://php.net/crypt
		// 12 is the workload factor (around 300ms on my Core i7 machine), see http://php.net/crypt
	$check = crypt($pass, '$2y$12$' . $salt);
	echo $salt;
	echo "<br>";
	echo $check;
}
?>