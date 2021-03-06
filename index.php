<?php
include('header.php');
?>
<div class="container container-body" >
	<div class="col-md-8 padding-right-5">
		<div class="box-content row">
			<h8 class="text-bold background-red text-white">Hội An trong tôi</h8>
			<div class="line_red"></div>
			<!--doan1-->
			<?php
			$articles= getListArticles();
			$i=0;
			foreach ($articles as $article) {
			if($i++==10) break;
			?>							
				<div>
					<div class="col-md-12">
						<div class="row thumbnail">
							<div class="col-md-4" style="margin-top:10px;">
								<img src="<?php echo $article->getImage(); ?>" style="box-shadow:0px 0px 2px #555; border:#fefefe solid 3px;" width="200px" height="200px" />
							</div>
							<div class="col-md-8 caption">
								<h3>
									<a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>">
										<?php echo $article->getTitle(); ?>

									</a>
								</h3>
								<?php echo $article->getDescription(); ?>
								<hr />
								<div class="mo" style="opacity:10%;">
									<span class="glyphicon glyphicon-user">
										
									</span>
									<?php echo $article->getAuthor(); ?>&nbsp
									<span class="glyphicon glyphicon-calendar">
										
									</span>
									<?php
									$publishDate=$article->getPublishDate();
									echo substr($publishDate, 8,2).'-'.substr($publishDate, 5,2).'-'.substr($publishDate, 0,4); ?>
								</div>
								<a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>&idCategory=<?php echo $article->getIdCategory(); ?>" class="btn btn-primary pos_right_below" role="button">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<div class="col-md-4 padding-left-5">
		<div id="content-right">
			<?php
			include('weather.php');
			include('news.php');
			?>
		</div>
	</div>
</div>
</div>
<?php
include('footer.php');
?>
</body>
</html>
