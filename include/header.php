<?php
	ob_start();
	include '../config/base_url.php';
	include '../config/koneksi.php';
	include '../config/base_url.php';
	session_start();
 ?>
<!DOCTYPE php>
<html lang="en">
<!-- Head -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title> | Durian Bogor </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo $base_url ?>assets/images/logo/shortcut.png">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/countdown.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/style_frontend.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/google.css">

	<!--  Javascript-->
	<script src="<?php echo $base_url ?>assets/js/jquery.js"></script>
	<script src="<?php echo $base_url ?>assets/js/sweetalert-dev.js"></script>
	<script src="<?php echo $base_url ?>assets/js/alert.js"></script>
	<script src="<?php echo $base_url ?>assets/js/jquery.countdownTimer.js"></script>
	<script src="<?php echo $base_url ?>assets/js/script_frontend.js"></script>
	<!-- End Javascript -->
</head>
<!-- End Head -->
<!-- Body -->
<body>
	<?php include'../include/welcome.php'; ?>
