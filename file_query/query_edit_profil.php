<?php
		include '../config/koneksi.php';
		include '../config/base_url.php';

		if (!empty($_SESSION['user'])) {
			$id_user=$_SESSION['user'];

		if(isset($_POST['update'])){

		$name=$_POST['name'];
		$jenis_kelamin=$_POST['jenis_kelamin'];
		$email=$_POST['email'];
		$alamat=$_POST['alamat'];
		$telepon=$_POST['telepon'];

		$query="UPDATE tb_user
					  SET
					  name='$name',
					  jenis_kelamin='$jenis_kelamin',
					  email='$email',
					  alamat='$alamat',
					  telepon=$telepon
					  WHERE
					  tb_user.id_user='$id_user' ";
		$data=mysqli_query($con,$query);

		if($data){
				header("location:".$base_url."show/profil.php");
		}
		else{ ?>
			<script type="text/javascript">
				swal({
					text: "",
					title: "Harap Ubah Profil Dengan Benar",
					html:true
				});
			</script>

<?php } } }

		$id_user = $_GET['id_user'];
		$query = "SELECT * FROM tb_user WHERE id_user=$id_user";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);
		$nameu=$hasil['name'];
		$jenis_kelaminu=$hasil['jenis_kelamin'];
		$emailu=$hasil['email'];
		$alamatu=$hasil['alamat'];
		$teleponu=$hasil['telepon'];

?>
