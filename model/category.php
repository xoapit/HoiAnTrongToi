<?php
class Category{
	private  $idCategory;
	private $categoryName;


	public function __construct($idCategory,$categoryName){
		$this->idCategory=$idCategory;
		$this->categoryName=$categoryName;
	}

	public function getIdCategory(){
		return $this->idCategory;
	}

	public function getCategoryName(){
		return $this->categoryName;
	}
}
?>