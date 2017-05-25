<?php
include('header.php');
?>
<div class="container container-body" >
	<div class="col-md-8 padding-right-5">
		<div class="box-content row">
			<h8 class="text-bold background-red text-white">Hội An trong tôi</h8>
			<div class="line_red"></div>

			<form action="proccessAddFeedback.php" method="post">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Author</label>
							<input type="text" class="form-control" name="author" >
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Time</label>
							<input type="date" class="form-control" name="time"  >
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label for="exampleInputPassword1">Phone</label>
							<input type="text" class="form-control" name="phone" >
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" class="form-control" name="email" >
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Subject</label>
					<input type="text" class="form-control" name="subject" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Content</label>
					<textarea class="form-control" rows="10" name="content"></textarea>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Send</button>
			</form>

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
