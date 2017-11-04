<?php
	session_start();
	include '../config/koneksi.php';

	if ( isset($_SESSION['user'])!="" ) {
		header("Location:".$base_url."admin/show/dashboard");
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

		$res=mysqli_query($con,"SELECT * FROM tb_admin WHERE email='$_POST[email]' OR username='$_POST[email]' AND password ");
		$row=mysqli_fetch_array($res);
		$count = mysqli_num_rows($res);

		if( $count == 1 && $row['password']==$password ) {
			$_SESSION['user'] = $row['id_admin'];
			$_SESSION['pesan']="sukses";
			header("Location:".$base_url."admin/show/dashboard");
			}else{ ?>
			<script type="text/javascript">
				swal("Gagal Login", "Username, E-mail atau Password yang anda masukan salah","error");
			</script>

<?php  } } } ?>
