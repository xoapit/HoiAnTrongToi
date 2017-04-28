<?php
class Admin{
	private  $username;
	private $password;
	private $fullname;


	public function __construct($username,$password,$fullname){
		$this->username=$username;
		$this->password=$password;
		$this->fullname=$fullname;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getFullname(){
		return $this->fullname;
	}
}
?>