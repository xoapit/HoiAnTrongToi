<div class="box-content row box-news">
	<h8 class="text-bold background-red text-white">Tin tức</h8>
	<div class="line_red"></div>
	<marquee direction="down" height="270" behavior="alternate" scrollamount=3>
		<?php
		$articles= getArticlesByIdCategory('C01');
		$i=0;
		foreach ($articles as $article) {
			if($i++==10) break;
			?>
			<div class="row">
				<dir class="col-md-3">
					<img src="<?php echo $article->getImage(); ?>" style="height: 70px; width: 70px; margin-top:-10px;padding-top: 0px;">
				</dir>
				<div class="col-md-9">
					<p><a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>"><?php echo $article->getTitle(); ?></a></p>
				</div>
				<hr>
			</div>
			<?php
		}
		?>
	</marquee>
	<hr style="margin: 0px; padding-bottom: 7px;">
</div>