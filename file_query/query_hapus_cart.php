<?php
	include "../config/koneksi.php";
	include "../config/base_url.php";

	$id_cart= $_GET['id_cart'];
	$sql="DELETE FROM tb_cart WHERE id_cart = $id_cart";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."show/troli.php");
	}
	else{ ?>
		<script type="text/javascript">
			swal("Gagal Hapus", "Gagal Menghapus","error");
		</script>

<?php	} ?>
