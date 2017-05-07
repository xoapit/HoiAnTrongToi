<div id="viewArticle jumbotron">
	<?php 
		include '../controller/controller.php';
		$idArticle=$_GET['idArticle'];
		$article= getArticle($idArticle);
		echo $article->getTitle();
		echo "<br><hr>";
		echo $article->getContent();
	?>
</div>