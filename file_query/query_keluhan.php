<?php
		include '../config/koneksi.php';
		include '../config/waktu.php';
		include '../config/base_url.php';

		session_start();

		if(isset($_POST['btn-keluhan'])){

		$id_user = $_SESSION['user'];
		$jenis_keluhan = $_POST['jenis_keluhan'];
		$keluh = $_POST['keluhan'];

		$folder ='../images/keluhan/';
		$name = basename($_FILES['foto']['name']);
		$foto = $folder . $name;

		$post=("INSERT INTO tb_keluhan(
						id_user,
						jenis_keluhan,
						keluhan,
						foto,
						waktu)
						VALUES(
						'$id_user',
						'$jenis_keluhan',
						'$keluh',
						'$name',
						'$waktu')");
		$data=mysqli_query($con,$post);

		if ($data) {
			move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
			header("location:".$base_url."show/tanggapan.php");
		}
		else{ ?>
			<script type="text/javascript">
		    swal({
		      text: "<h5 class='black-text'>Gagal Mengirim Keluhan</h5>",
		      title: "<b class='red-text'>Gagal</b>",
		      html:true
		    });
		  </script>

<?php } } ?>
