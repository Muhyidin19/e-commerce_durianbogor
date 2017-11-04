<?php
		include '../config/koneksi.php';
		include '../config/base_url.php';

		if (!empty($_SESSION['user'])) {
			$id_user=$_SESSION['user'];

		if(isset($_POST['konfirmasi'])){
		echo $id_transaksi=$_GET['id_transaksi'];
		$folder ='images/bukti_pembayaran/';
		$name = basename($_FILES['foto']['name']);
	  $foto = $folder . $name;

		echo $query="UPDATE tb_transaksi SET id_transaksi='$id_transaksi',id_user='$id_user', foto='$name' ";

		if ($_FILES['foto']['name']!="") {
			$query = $query.",foto = '$name'";
		}
		$query = $query." WHERE id_user=$id_user AND id_transaksi=$id_transaksi";
		$data=mysqli_query($con,$query);
		if($data){

			move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
			header("location:".$base_url."show/pembelian.php");

		}else{ ?>

			<script type="text/javascript">
				swal({
					text: "Gagal",
					title: "Harap Pilih Foto",
					html:true
				});
			</script>

		<?php } } }

?>
