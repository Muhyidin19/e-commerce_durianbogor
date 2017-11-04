<?php
	include'../config/koneksi.php';
	include'../config/base_url.php';

	if ( isset($_SESSION['user'])!="" ) {
		header("Location:".$base_url."index.php");
		exit;
	}

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
		$email = $_POST['email'];
		$res=mysqli_query($con,
			"SELECT * FROM tb_user
			 WHERE email= '$email'
			 OR name= '$email'
			 AND password ");

		$row=mysqli_fetch_array($res);
		$count = mysqli_num_rows($res);

		if( $count == 1 && $row['password']==$password ) {

			$_SESSION['user'] = $row['id_user'];
			$_SESSION['pesan']="sukses";

			header("Location:".$base_url."index.php");

		} else{ ?>
			<script type="text/javascript">
				swal("Gagal Login", "Username, E-mail atau Password yang anda masukan salah","error");
			</script>

<?php } } } ?>
