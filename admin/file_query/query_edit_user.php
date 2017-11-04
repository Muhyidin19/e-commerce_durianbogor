<?php
		include '../../config/koneksi.php';

		if(isset($_POST['update'])){

		$id_user=$_POST['id_user'];
		$username=$_POST['name'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$email=$_POST['email'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];

		$folder ='../images/user/';
		$name = basename($_FILES['foto']['name']);
	  $foto = $folder . $name;

		$query="UPDATE tb_user
						SET name='$username',
						jenis_kelamin='$jenis_kelamin',
						email='$email',
						alamat='$alamat',
						telepon=$telepon";
		if ($_FILES['foto']['name']!="") {
			$query = $query.",foto = '$name'";
		}
		$query = $query." WHERE id_user=$id_user";
		$data=mysqli_query($con,$query);

		if ($data) {
			move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
			header("location:".$base_url."admin/show/show_user");
		}
		else{ ?>
		<script type="text/javascript">
			swal({
				text: "",
				title: "Harap Ubah Profil Dengan Benar",
				html:true
			});
		</script>

<?php } }

		$id_user = $_GET['id_user'];

		$query = "SELECT * FROM tb_user WHERE id_user=$id_user";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);

		$id_useru=$hasil['id_user'];
		$nameu=$hasil['name'];
		$jenis_kelaminu=$hasil['jenis_kelamin'];
		$emailu=$hasil['email'];
		$alamatu=$hasil['alamat'];
		$teleponu=$hasil['telepon'];
		$fotou=$hasil['foto'];
?>
