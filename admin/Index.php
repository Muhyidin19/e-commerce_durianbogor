<?php 
  include '../config/base_url.php';
 ?>
<!DOCTYPE html>
<html lang="en"> 
  <!-- Head -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> | Durian Bogor </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/images/logo/shortcut.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/stylelogin_backend.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/sweetalert.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/google.css">
  	<!--  JavaScripts-->
  	<script src="<?php echo $base_url; ?>assets/js/jquery.js"></script>
  	<script src="<?php echo $base_url; ?>assets/js/sweetalert-dev.js"></script>
  	<script src="<?php echo $base_url; ?>assets/js/alert.js"></script>
  	<!-- End JavaScript -->
  </head>
  <!-- End Head -->

  <!-- Body -->
  <body>
  	<?php
  		include '../config/koneksi.php';
  		include 'file_query/query_login.php';
  	?>

    <!-- Parallax -->
    <div class="parallax-container">
      <div class="parallax"><img src="<?php echo $base_url; ?>assets/images/backgrounds/background.jpg">
      </div>
      <div class="container">
        <div class="row">
          <!-- Login-->
          <div class="col s12 m3 l3">
          </div>
          <div class="col s12 m6 l6 z-depth-5 waves-effect waves-light white">
            <h4><center>Login</center></h4><br>
  					<center><img class="circle" width="200px" height="200px" src="<?php echo $base_url; ?>assets/images/user/admin.png"></center><br>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  						<div class="row">
  	            <div class="input-field col s12">
  	              <input name="email" type="text">
  	              <label for="text"><i class="material-icons">person_pin </i> Email atau Username</label>
  	            </div>
  	          </div>
  	          <div class="row">
  	            <div class="input-field col s12">
  	              <input type="password" name="password" class="validate" >
  	              <label for="password"><i class="material-icons">lock </i> Password</label>
  	            </div>
  	          </div>
              <div class="row">
                <div class="col s12">
                  <button class="btn fullbtn waves-effect waves-light red darken-1 z-depth-2" type="submit" name="login" value="login">Login</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End login -->
        </div>
      </div>
    </div>
    <!-- End Parallax  -->

	<!-- Javascript -->
	<script src="<?php echo $base_url; ?>assets/js/materialize.min.js"></script>
	<script src="<?php echo $base_url; ?>assets/js/script_backend.js"></script>
	<!-- End Javascript -->

  </body>
  <!-- End Body -->
</html>
