<?php 
	include 'config/base_url.php';
 ?>
<html>
	<head>
	<style type="text/css">
	body{
		background:#e8f5e9;
	}
	.marg{
		margin:70px auto;
	}
	.img{
		width:250px; height:350px;}
	.progress{
		background-color:#eb7272 !important;
	}
	.indeterminate{
		background-color:#e8f5e9 !important;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/materialize.min.css">
	</head>
	<body>
		<div class="marg">
			<center>
				<br><br>
				<div class="container">
					<div class="row">
					<div class="col s12 m6 l6" style="align: right;">
						<img style="transform:rotate(-10deg);" src="<?php echo $base_url; ?>assets/images/not_found/not_found.png" class="img">
					</div>
					
					<div class="col s12 m6 l6">
						<img style="transform:rotate(10deg);" src="<?php echo $base_url; ?>assets/images/not_found/kata.png" class="img">
					</div>
				</div>
				</div>
				
				
				<div style="font-size:20px; color:#555;">
					<br><br>
					<div class="progress">
				      <div class="indeterminate"></div>
				  </div>
				</div>
				<br>
				<div style="color:#ee5b5b; font-size:1.2rem;"><i><b> All Right Reserved E-Commerce Durian Bogor </b> (Project Work)</i></div>
			</center>
		</div>
	</body>
</html>
