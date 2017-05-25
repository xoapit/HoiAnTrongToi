<?php
	$jsonurl = "http://api.openweathermap.org/data/2.5/weather?q=HoiAn%2Cvn%3Fid&appid=246184a1b19338ef5994419307975583";
	$json = file_get_contents($jsonurl);

	$abc= json_decode($json, true);
	$temp=(int) $abc["main"]["temp"]-273;
	$temp_min=(int) $abc["main"]["temp_min"]-274;
	$temp_max=(int) $abc["main"]["temp_max"]-272;

	$visibility= $abc["visibility"] /1000;
	$humidity= $abc["main"]["humidity"];
	$win_speed= $abc["wind"]["speed"];
	$sunrise= $abc["sys"]["sunrise"];
	$sunset= $abc["sys"]["sunset"];
	$description= $abc["weather"][0]["description"];
	?>

	<div class="box-content row" >

		<h8 class="text-bold background-red text-white">Thời tiết</h8>
		<div class="line_red"></div>
		<div>
			<div>
				<center>
					<p style="color: #3498db;font-size: 200%;">Hội An, Việt Nam</p>
				</center>
			</div>
			<div class="col-md-12" >
				<div class="col-md-4 col-xs-4">
					<img src="image/cloudy.png" style="width: 100%; height: auto;">
				</div>
				<div class="col-md-4 col-xs-4" style="margin: -20px 0 -40px 0;">
					<p style="font-size: 650%; font-weight: 500; color: #e74c3c;"><?php echo $temp; ?></p>
				</div>
				<div class="col-md-4 col-xs-4">
					<p style="font-size: 200%;color: #34495e;">  ° C</p>
				</div>
			</div>
			<div class="col-md-12" >
				<center>
					<h3 class="text-info" style="font-size: 200%;"><?php echo $description;?></h3><br>
					<div id="descriptionWeather">
						<p style="margin-top: -20px;">Wind speed <?php echo $win_speed;?> km/h &nbsp&nbsp&nbsp  Visibility <?php echo $visibility;?> km</p><br>
					<p style="margin-top: -20px;">Humidity <?php echo $humidity;?> %&nbsp&nbsp&nbsp Min temp <?php echo $temp_min;?> °C &nbsp&nbsp&nbsp Max temp <?php echo $temp_max;?> °C</p>
					</div>
				</center>
			</div>
		</div>
	</div>