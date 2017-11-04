<?php
	include'../config/base_url.php';
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location:  ".$base_url."index.php");
	}

	else if(isset($_SESSION['user'])!="") {
		header("Location: ".$base_url."index.php");
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location: ".$base_url."index.php");
		exit;
	}
?>
