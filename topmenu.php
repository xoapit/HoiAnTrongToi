<script type="text/javascript">
	$(window).scroll(function() {
		var scrollTop = $(window).scrollTop();
		if(scrollTop >= 300) {
			$('#topmenu').css('display','block'); 
		} else{
			$('#topmenu').css('display','none'); 
		}

		if(scrollTop>=660 && $(window).width()>1000){
			$('#content-right').css('top','45px');
			$('#content-right').css('position','fixed');
			$('#content-right').css('width','29%');
			$('#descriptionWeather').css('display','none');
		}else{
			$('#content-right').css('top','none');
			$('#content-right').css('position','none');
			$('#content-right').css('width','100%');
			$('#descriptionWeather').css('display','block');
		}
		//var type=$_GET['idCategory'];
		//if(type==null)
		$('#lehoi').css('background','#555');
	});
</script>


<div class="topmenu" id="topmenu">
	<nav class="navbar-inverse navTopMenu">

		<!-- Nav -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu2">
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
		<div class="collapse navbar-collapse" id="menu2">
			<ul class="nav navbar-nav ">
				<?php 
				$type="";
				if(isset($_GET['idCategory'])){
					$type=$_GET['idCategory']; 
				}
				
				?>
				<?php
				if($type=="C02") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				
				<a href="viewCategory.php?idCategory=C02" style="color:#FFF">LỄ HỘI</a>
			</li>
			<?php
				if($type=="C04") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="viewCategory.php?idCategory=C04" style="color:#FFF">ĐIỂM THAM QUAN</a>
			</li>
			<?php
				if($type=="C03") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="viewCategory.php?idCategory=C03" style="color:#FFF">ẨM THỰC</a>
			</li>
			<?php
				if($type=="C05") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="viewCategory.php?idCategory=C05" style="color:#FFF">DV LƯU TRÚ</a>
			</li>
			<?php
				if($type=="C00") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="map.php?idCategory=C00" style="color:#FFF">BẢN ĐỒ</a>
			</li>
			<?php
				if($type=="C06") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="viewCategory.php?idCategory=C06" style="color:#FFF">NGÂN HÀNG</a>
			</li>						
			<?php
				if($type=="feedback") echo "<li  style='background: #c0392b'>"; 
				else echo "<li>"; 
				?>
				<a href="feedback.php?idCategory=feedback" style="color:#FFF">GÓP Ý</a>
			</li>						
		</ul>
		<ul class="nav navbar-right" style="padding-top: 15px; padding-right: 40px; color:white;">
			Tel: 01672734732
		</ul>
		<!-- /.navbar-collapse -->

	</nav>
</div>