<?php include'../config/koneksi.php'; ?>
<?php include'../config/base_url.php' ?>

<!DOCTYPE html>
<html lang="en">
  <!-- Head -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> | Durian Bogor </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo $base_url ?>assets/images/logo/shortcut.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/style_frontend.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/sweetalert.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/google.css">
  	<!--  Javascript-->
  	<script src="<?php echo $base_url ?>assets/js/jquery.js"></script>
    <script src="<?php echo $base_url ?>assets/js/sweetalert-dev.js"></script>
    <script src="<?php echo $base_url ?>assets/js/alert.js"></script>
  	<script src="<?php echo $base_url ?>assets/js/script_frontend.js"></script>
    <!-- End Javascript -->
  </head>
  <!-- End Head -->
  <!-- Body -->
  <body>
    <?php

    session_start();

    if( isset($_POST['login']) ) {

      $email = trim($_POST['email']);
      $email = strip_tags($email);
      $email = htmlspecialchars($email);

      $name = trim($_POST['email']);
      $name = strip_tags($name);
      $name = htmlspecialchars($name);

      $pass = trim($_POST['password']);
      $pass = strip_tags($pass);
      $pass = htmlspecialchars($pass);

      {

      $password = hash('sha1', $pass);

      $res=mysqli_query($con,"SELECT * FROM tb_user WHERE email='$_POST[email]' OR name='$_POST[email]' AND password ");
      $row=mysqli_fetch_array($res);
      $count = mysqli_num_rows($res);


      if( $count == 1 && $row['password']==$password ) {
        $_SESSION['user'] = $row['id_user'];
        $_SESSION['pesan']="sukses";
        
        $id_produk=$_SESSION['produk']['id_produk'];

        $jml=$_SESSION['produk']['jumlah'];

        $id_user = $_SESSION['user'];

        $query=("INSERT INTO tb_cart
                 VALUES('','$id_produk','$id_user','$jml')");
        $hasil=mysqli_query($con,$query);
        header("Location:".$base_url."show/troli");

        }
        else{ ?>
        <script type="text/javascript">
          swal("Gagal Login", "Username, E-mail atau Password yang anda masukan salah","error");
        </script>

    <?php } } } ?>

    <!-- Nav -->
    <nav class="nav">
      <div class="nav-wrapper">
        <div class="conta">
          <a href="index.php" class="brand-logo brand"><img class="responsive-img" src="<?php echo $base_url ?>assets/images/logo/logo.png"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><img class="iconmenu" src="images/icon/nav_icon.png"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down navright">
            <li class="padding-left-right active yes-yellow black-text">Login</li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li class="padding-left-right active yes-yellow black-text">Login</li>
        </div>
      </div>
    </nav>
    <!-- End Nav -->

    <br><br><br>

    <!-- Form -->
    <div class="col s12">
      <div class="container">
        <div class="row">
          <div class="col s3">
          </div>
          <!-- Form Login -->
          <div class="col s12 m6 l6 white-tipis z-depth-1">
  	        <blockquote>
  	        	<h4><center>Login</center></h4>
  	        </blockquote>
  					<br><br>
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
                  <button class="btn fullbtn waves-effect waves-light red darken-1 " type="submit" name="login" value="login">Login<i class="material-icons right">send</i></button>
                </div>
              </div>
            </form>
          </div>
          <!--  End Form Login -->
        </div>
      </div>
    </div>
    <!-- End Form -->

    <!--  Javascript-->
    <script src="<?php echo $base_url ?>assets/js/materialize.min.js"></script>
    <script src="<?php echo $base_url ?>assets/js/sweetalert-dev.js"></script>
    <script src="<?php echo $base_url ?>assets/js/alert.js"></script>
    <script src="<?php echo $base_url ?>assets/js/script_frontend.js"></script>
    <!-- End Javascript -->
  </body>
</html>
