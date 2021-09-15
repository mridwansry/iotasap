<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/cover/">

	<title>Smoke Dummy </title>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function() {
				$("#ceksensor").load('ceksensor.php');
			}, 500);
		});
	</script>
</head>

<body>

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">IOT ASAP</h3>
						<nav>
							<ul class="nav masthead-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="mode.php">Setting Mode</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="inner cover">
					<h1 class="cover-heading">Nilai Kelembaban</h1>
					<p class="lead">

					<div class="panel panel-default" style="background-color: lightslategrey;">
						<div class="panel-body">

							<h2><span style="color: lavender;" id="ceksensor"></span></h2>
						</div>




					</div>
					<!-- 
				<div class="mastfoot">
					<div class="inner">
						<p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
					</div>
				</div> -->

				</div>

			</div>

		</div>

		<!-- <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
	<div class="container">
	<div class="navbar-brand">IOT SMOKE
	</div>
	<ul class="nav navbar-nav ">
		<li> <a href="index.php">Home</a></li>
		<li> <a href="mode.php">Setting Mode</a></li>
		<li> <a href="#">Contact</a></li>
	</ul>
</div>
</nav>


	<div class="container" style="text-align: center; padding-top: 40px; width: 500px">
		<h2>Nilai Kelembaban </h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><span id="ceksensor"></span></h2>
				
			</div>
		</div>
		<div class="tombol">
			
		</div>
		<img src="">
	</div> -->
		<script src="js/bootstrap.min.js"></script>
</body>

</html>