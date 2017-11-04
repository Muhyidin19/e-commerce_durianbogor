<?php
	include "../config/koneksi.php";
	include "../config/base_url.php";

	$id_keluhan= $_GET['id_keluhan'];
	$sql="DELETE FROM tb_keluhan WHERE id_keluhan = $id_keluhan";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."show/tanggapan.php");
	}
	else{ ?>
		<script type="text/javascript">
			swal("Gagal Hapus", "Gagal Menghapus","error");
		</script>

<?php	} ?>
