<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- Custom styles for this template -->
<link href="css/cover.css" rel="stylesheet">
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/cover/">

<?php
include "konek.php";
if (isset($_POST['btn'])) {
	$mode = $_POST['status'];
	mysqli_query($konek, "update mode set mode='$mode' where id=1");
}

$konek = mysqli_connect("localhost", "root", "", "websmoke");
$data = mysqli_query($konek, "select * from mode");
$sql = mysqli_fetch_array($data);
$mode = $sql['mode'];
//echo $mode;
if ($mode == 1)
	$ket = "Save Data";
if ($mode == 0)
	$ket = "Realtime";
?>

<div class="site-wrapper">

	<div class="site-wrapper-inner">

		<div class="cover-container">

			<div class="masthead clearfix">
				<div class="inner">
					<h3 class="masthead-brand">IOT ASAP</h3>
					<nav>
						<ul class="nav masthead-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="mode.php">Setting Mode</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="inner cover">
				<h1 class="cover-heading">Setting Mode</h1>
				<p class="lead">
				<div class="panel panel-default" style="background-color: lightslategrey;">
					<div class="panel-body">
						<form action="" method="POST">
							<h1><?php echo $ket; ?> </h1>
							<h3>
								<input type="radio" value="1" name="status" id="status">Save Data
								<input type="radio" value="0" name="status" id="status">Realtime
							</h3>
							<button class="btn btn-primary" name="btn" id="btn">Save</button>
						</form>
					</div>
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
	<div class="navbar-brand">Sensor Suhu
	</div>
	<ul class="nav navbar-nav">
		<li> <a href="index.php">Home</a></li>
		<li> <a href="mode.php">Setting Mode</a></li>
		<li> <a href="#">Contact</a></li>
	</ul>

</nav> -->


<!-- <div class="container" style="text-align: center; padding-top: 40px; width: 500px">
	<h2><b>	Setting Mode </b></h2>
	<div class="panel panel-default"  >
		<div class="panel-body" >
			<form action="" method="POST">
				<h1><?php // echo $ket; 
					?> </h1>
					<h3>
					<input type="radio" value="1" name="status" id="status">Save Data
					<input type="radio" value="0" name="status" id="status">Realtime
				</h3>
			<button class="btn btn-primary" name="btn" id="btn">Save</button>	
			</form>
		</div>
	</div>
</div> -->