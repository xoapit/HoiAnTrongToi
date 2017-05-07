<?php
class Article{
	private  $idArticle;
	private  $title;
	private  $content;
	private  $description;
	private  $image;
	private  $idCategory;
	private  $hashtag;
	private $author;
	private $publishDate;

	public function __construct($idArticle, $title, $content,$description,  $image, $idCategory,$hashtag,$author,$publishDate ){
		$this->idArticle=$idArticle;
		$this->title=$title;
		$this->content=$content;
		$this->description=$description;
		$this->image=$image;
		$this->idCategory=$idCategory;
		$this->hashtag=$hashtag;
		$this->author=$author;
		$this->publishDate=$publishDate;
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

	public function getDescription(){
		return $this->description;
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

	public function getAuthor(){
		return $this->author;
	}
	public function getPublishDate(){
		return $this->publishDate;
	}
}
?>