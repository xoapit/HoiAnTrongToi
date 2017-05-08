<?php
include('controller/controller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hội An Trong Tôi</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container-fixed">
		<div class="header_top">
			<div class="container">Tel: 01672734732</div>
		</div>
		<!--header-->
		<div class="header">
			<div class="menu_top container">
				<nav class="navbar navbar-inverse">
					
					<!-- Nav -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="index.php" style="color:#FFF">
							<span class="glyphicon glyphicon-home" ></span> Home
						</a>

					</div>
					<!-- Nav collapse -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav ">
							<li>
								<a href="viewCategory.php?idCategory=C02" style="color:#FFF">LỄ HỘI</a>
							</li>
							<li>
								<a href="viewCategory.php?idCategory=C04" style="color:#FFF">ĐIỂM THAM QUAN</a>
							</li>
							<li>
								<a href="viewCategory.php?idCategory=C03" style="color:#FFF">ẨM THỰC</a>
							</li>
							<li>
								<a href="viewCategory.php?idCategory=C05" style="color:#FFF">DV LƯU TRÚ</a>
							</li>
							<li>
								<a href="map.php" style="color:#FFF">BẢN ĐỒ</a>
							</li>
							<li>
								<a href="viewCategory.php?idCategory=C06" style="color:#FFF">NGÂN HÀNG</a>
							</li>						
						</ul>

						<!-- /.navbar-collapse -->
						
					</nav>

				</div>
				<div>
					<div class="logo_top col-sm-offset-4 col-sm-4 col-xs-12">
						<center>
							<img src="image/logohoian.png" width="100%" />
						</center>
					</div>
					<div class="search_top">
						<center>
							<form class="form" action="" method="post" name="formSearch" id="formSearch">
								<center>
									<div class="form-group input_search col-sm-offset-3 col-sm-6 col-xs-12 ">
										<div class="col-sm-11 col-xs-10">
											<input class="form-control input-lg" type="text" name="searchContent" id="searchContent" placeholder="Search..." />
										</div>
										<input type="button" name="btnSearch" class="btn btn-default col-sm-1 col-xs-2 btn-lg btn_search" />
									</div>
								</center>
							</form>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="container noibat" style="padding-top: -200px;">
			<div class="col-md-4">
				<center>
					<img src="image/thumb1.jpg" class="img_thumb img-circle"><br>
					<a href="http:\\google.com.vn" class="link_below_image">Tin Tức Hội An</a>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<img src="image/thumb2.jpg" class="img_thumb img-circle"><br>
					<a href="http:\\google.com.vn" class="link_below_image">Lễ Hội & Sự Kiện</a>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<img src="image/thumb3.jpg" class="img_thumb img-circle"><br>
					<a href="http:\\google.com.vn" class="link_below_image">Địa Điểm Tham Quan </a>
				</center>
			</div>
		</div>

		<div class="container" style="margin-top: 20px;">
			<div class="col-md-8">
				<div class="box-content row">
					<h8 class="text-bold background-red text-white">Hội An trong tôi</h8>
					<div class="line_red"></div>
					<!--doan1-->
					<?php
					$articles= getListArticles();
					foreach ($articles as $article) {
						?>							
						<div>
							<div class="col-md-12">
								<div class="row thumbnail">
									<div class="col-md-4" style="margin-top:10px;">
										<img src="<?php echo $article->getImage(); ?>" class="img-rounded" style="box-shadow:0px 0px 5px black;" width="200px" height="200px" />
									</div>
									<div class="col-md-8 caption">
										<a href="viewArticle.php?idArticle=<?php echo $article->getIdArticle(); ?>"><h3><?php echo $article->getTitle(); ?></h3><a/><?php echo $article->getDescription(); ?>
										<hr />
										<div class="mo" style="opacity:10%;"><span class="glyphicon glyphicon-user"><?php echo $article->getAuthor(); ?>&nbsp</span>
											<span class="glyphicon glyphicon-calendar"><?php
												$publishDate=$article->getPublishDate();
												echo substr($publishDate, 8,2).'-'.substr($publishDate, 5,2).'-'.substr($publishDate, 0,4); ?></span>
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
				<div class="col-md-4">
					<div class="box-content">
						
						<h8 class="text-bold background-red text-white">Thời tiết</h8>
						<div class="line_red"></div>


						<!-- weather widget start -->
						<div id="m-booked-weather-bl250-929">
							<div class="booked-wzs-250-175 weather-customize" style="background-color:#a4cff5;width:300px;" id="width1">
								<div class="booked-wzs-250-175_in">
									<div class="booked-wzs-250-175-data">
										<div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="http://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="http://www.booked.net" /> </a> </div>
										<div class="booked-wzs-250-175-right">
											<div class="booked-wzs-day-deck">
												<div class="booked-wzs-day-val">
													<div class="booked-wzs-day-number"><span class="plus">+</span>27</div>
													<div class="booked-wzs-day-dergee">
														<div class="booked-wzs-day-dergee-val">&deg;</div>
														<div class="booked-wzs-day-dergee-name">C</div>
													</div>
												</div>
												<div class="booked-wzs-day">
													<div class="booked-wzs-day-d">H: <span class="plus">+</span>27&deg;</div>
													<div class="booked-wzs-day-n">L: <span class="plus">+</span>24&deg;</div>
												</div>
											</div>
											<div class="booked-wzs-250-175-info">
												<div class="booked-wzs-250-175-city">Da Nang </div>
												<div class="booked-wzs-250-175-date">Friday, 28 April</div>
												<div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div>
											</div>
										</div>
									</div>
									<a target="_blank" href="http://www.booked.net/weather/da-nang-33810">
										<table cellpadding="0" cellspacing="0" class="booked-wzs-table-250">
											<tr>
												<td>Sat</td>
												<td>Sun</td>
												<td>Mon</td>
												<td>Tue</td>
												<td>Wed</td>
												<td>Thu</td>
											</tr>
											<tr>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-18"></div>
												</td>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-06"></div>
												</td>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-18"></div>
												</td>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-18"></div>
												</td>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-18"></div>
												</td>
												<td class="week-day-ico">
													<div class="wrz-sml wrzs-18"></div>
												</td>
											</tr>
											<tr>
												<td class="week-day-val"><span class="plus">+</span>24&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>29&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>29&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>30&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>31&deg;</td>
											</tr>
											<tr>
												<td class="week-day-val"><span class="plus">+</span>22&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>23&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>24&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>23&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>24&deg;</td>
												<td class="week-day-val"><span class="plus">+</span>23&deg;</td>
											</tr>
										</table>
									</a>
								</div>
							</div>
							<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-929'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=33810&type=3&scode=2&ltid=3457&domid=w209&anc_id=45462&cmetric=1&wlangID=1&color=a4cff5&wwidth=300&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->

						</div>

					</div>
					<div class="box-content row">
						<h8 class="text-bold background-red text-white">Tin tức</h8>
						<div class="line_red"></div>
						<?php
						$articles= getArticlesByIdCategory('C01');
						$i=0;
						foreach ($articles as $article) {
							if($i++==10) break;
							?>
							<div class="row">
								<dir class="col-md-3">
									<img src="<?php echo $article->getImage(); ?>" style="height: 70px; width: 70px; margin-top:-10px;padding-top: 0px;" class="img-rounded">
								</dir>
								<div class="col-md-9">
									<p><?php echo $article->getTitle(); ?></p>
								</div>
							</div>
							<?php
						}
						?>

						<hr style="margin: 0px; padding-bottom: 7px;">

					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
