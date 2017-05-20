<?php
$idCategory= $_GET['idCategory'];
?>
<?php
include('header.php');
?>
<div class="container container-body">
	<div class="col-md-8 padding-right-5">
		<div class="box-content row">
			<h8 class="text-bold background-red text-white">Xem theo thể loại</h8>
			<div class="line_red">
			</div>
			<!--doan1-->
			<?php
			$articles= getArticlesByIdCategory($idCategory);
			foreach ($articles as $article) {
				?>							
				<div>
					<div class="col-md-12">
						<div class="row thumbnail">
							<div class="col-md-4" style="margin-top:10px;">
								<img src="<?php echo $article->getImage(); ?>" class="img-rounded" style="box-shadow:0px 0px 5px black;" width="200px" height="200px" />
							</div>
							<div class="col-md-8 caption">
								<a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>"><h3><?php echo $article->getTitle(); ?></h3></a><?php echo $article->getDescription(); ?>
								<hr/>
								<div class="mo" style="opacity:10%;"><span class="glyphicon glyphicon-user"></span><?php echo $article->getAuthor(); ?>&nbsp
									<span class="glyphicon glyphicon-calendar"></span><?php
									$publishDate=$article->getPublishDate();
									echo substr($publishDate, 8,2).'-'.substr($publishDate, 5,2).'-'.substr($publishDate, 0,4); ?>
									
									
								</div>
								<a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>" class="btn btn-primary pos_right_below" role="button">Read more</a>
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
<script type="text/javascript">
	$(function () {
		$("html, body").animate({
			scrollTop: 700}, 1000);
	});
</script>