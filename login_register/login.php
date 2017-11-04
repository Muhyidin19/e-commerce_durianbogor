	<?php include'../include/header.php' ?>
	<?php include'../include/nav.php' ?>
	<?php include'../file_query/query_login.php';?>
	<?php include'../config/base_url.php' ?>

  <br>
  <!-- Form -->
  <div class="col s12">
    <div class="container">
      <div class="row">
				<div class="col s12 m3 l3">
				</div>
      	<!-- Form Login -->
				<div class="col s12 m6 l6 white-tipis z-depth-1"> 
	        <blockquote>
	        	<h4><center>Login</center></h4>
	        </blockquote>
					<br><br>
	        <form action="" method="post">
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
	          <div class="col s12 m6"><h6 ><a class="a-merah" href="#" >Lupa Kata Sandi ?</a></h6> </div><div class="col s12 m6"><h6><a class="a-hijau" href="register.php">Daftar</a></h6></div>
	    		</form>
				</div>
      	<!--  End Form Login -->

      </div>
    </div>
  </div>
  <!-- End Form -->

  <br>

	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/footer.php' ?>
