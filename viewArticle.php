<?php
include('header.php');
?>
<?php
$idArticle= $_GET['idArticle'];
$article=getArticle($idArticle);
?>

<div class="container container-body" id="articleContent">
	<div class="col-md-8 padding-right-5">
		<div class="box-content row">
			<h8 class="text-bold background-red text-white">Bài viết</h8>
			<div class="line_red"></div>
			<!--doan1-->
			<div class="box-content" style="padding: 20px;">
				<center><h3><?php echo $article->getTitle();?></h3></center><br>
				<p><?php echo $article->getContent();?></p>
			</div>
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