<?php
		include '../config/koneksi.php';
		include '../config/base_url.php';

		if (!empty($_SESSION['user'])) {
			$id_user=$_SESSION['user'];

		if(isset($_POST['update'])){

		$folder ='images/user/';
		$name = basename($_FILES['foto']['name']);
	  $foto = $folder . $name;

		$query="UPDATE tb_user SET id_user='$id_user'";

		if ($_FILES['foto']['name']!="") {
			$query = $query.",foto = '$name'";
		}
		$query = $query." WHERE id_user=$id_user";
		$data=mysqli_query($con,$query);
		if($data){

			move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
			header("location:".$base_url."show/profil.php");

		}else{ ?>

			<script type="text/javascript">
				swal({
					text: "Gagal",
					title: "Harap Pilih Foto",
					html:true
				});
			</script>

		<?php } } }
		$id_usert = $_GET['id_user'];
		$query = "SELECT * FROM tb_user WHERE id_user=$id_user";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);
		$id_useru=$hasil['id_user'];
		$fotou=$hasil['foto'];
?>
