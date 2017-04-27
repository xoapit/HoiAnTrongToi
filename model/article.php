<?php
class Article{
	private  $idArticle;
	private  $title;
	private  $content;
	private  $image;
	private  $idCategory;
	private  $hashtag;

	public function __construct($idArticle, $title, $content,  $image, $idCategory,$hashtag){
		$this->idArticle=$idArticle;
		$this->title=$title;
		$this->content=$content;
		$this->image=$image;
		$this->idCategory=$idCategory;
		$this->hashtag=$hashtag;
	}

	public function getIdArticle(){
		return $this->idArticle;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getContent(){
		return $this->content;
	}

	public function getImage(){
		return $this->image;
	}

	public function getIdCategory(){
		return $this->idCategory;
	}

	public function getHashtag(){
		return $this->hashtag;
	}
}
?>