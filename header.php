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
	<link href="css/style.css" rel="stylesheet" src="css/style.css">
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
					<a href="viewCategory.php?idCategory=C01" class="link_below_image">Tin Tức Hội An</a>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<img src="image/thumb2.jpg" class="img_thumb img-circle"><br>
					<a href="viewCategory.php?idCategory=C02" class="link_below_image">Lễ Hội & Sự Kiện</a>
				</center>
			</div>
			<div class="col-md-4">
				<center>
					<img src="image/thumb3.jpg" class="img_thumb img-circle"><br>
					<a href="viewCategory.php?idCategory=C04" class="link_below_image">Địa Điểm Tham Quan </a>
				</center>
			</div>
		</div>
