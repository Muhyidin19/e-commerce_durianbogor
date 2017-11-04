<?php
	include '../config/koneksi.php';
	include '../config/base_url.php';

	if( isset($_SESSION['user'])!="" ){
		header("Location:".$base_url."index.php");
	}

	if ( isset($_POST['register']) ) {

		//
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);

		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);

		$pass = trim($_POST['password']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);

		$telepon = trim($_POST['telepon']);
		$telepon = strip_tags($telepon);
		$telepon = htmlspecialchars($telepon);

		$jenis_kelamin = trim($_POST['jenis_kelamin']);
		$jenis_kelamin = strip_tags($jenis_kelamin);
		$jenis_kelamin = htmlspecialchars($jenis_kelamin);

		$alamat = trim($_POST['alamat']);
		$alamat = strip_tags($alamat);
		$alamat = htmlspecialchars($alamat);

		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Mohon masukan nama";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Masukan nama minimal 3 karakter";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Nama harus benar";
		}

		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Salah";
		} else {
			// check email exist or not
			$query = "SELECT email FROM tb_user WHERE email='$email'";
			$result = mysqli_query($con,$query);
			$count = mysqli_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Email ini sudah ada yang menggunakan";
			}
		}

		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Mohon Masukkan Password.";
		} else if(strlen($pass) < 8) {
			$error = true;
			$passError = "Masukan password Minimal 8 karakter.";
		}

			$folder ='../assets/images/user/';
			$name_foto=basename($_FILES['foto']['name']);
			$foto = $folder . $name_foto;

			$password = hash('sha1', $pass);

			$query = "INSERT INTO tb_user(
								name,
								email,
								password,
								jenis_kelamin,
								alamat,
								telepon,
								foto)
								VALUES(
								'$name',
								'$email',
								'$password',
								'$jenis_kelamin',
								'$alamat',
								'$telepon',
								'$name_foto')";
			$res = mysqli_query($con,$query);

			if ($res) {

				move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

				$password = hash('sha1', $pass);

				$res=mysqli_query($con,"SELECT * FROM tb_user WHERE email='$_POST[email]' OR name='$_POST[email]' AND password ");
				$row=mysqli_fetch_array($res);
				$count = mysqli_num_rows($res);

				if( $count == 1 && $row['password']==$password ) {

					$_SESSION['user'] = $row['id_user'];
					$_SESSION['pesan']="sukses";
					header("Location:".$base_url."index.php");

				}
				unset($name);
				unset($email);
				unset($pass);
			}
	}
?>
