<?php
class Feedback{
	private  $idFeedback;
	private  $author;
	private  $subject;
	private  $content;
	private  $time;
	private  $phone;
	private $email;

	public function __construct($idFeedback, $author, $subject,  $content, $time,$phone,$email ){
		$this->idFeedback=$idFeedback;
		$this->author=$author;
		$this->subject=$subject;
		$this->content=$content;
		$this->time=$time;
		$this->phone=$phone;
		$this->email=$email;
	}

	public function getIdFeedback(){
		return $this->idFeedback;
	}

	public function getAuthor(){
		return $this->author;
	}

	public function getContent(){
		return $this->content;
	}

	public function getSubject(){
		return $this->subject;
	}

	public function getTime(){
		return $this->time;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function getEmail(){
		return $this->email;
	}
}
?>