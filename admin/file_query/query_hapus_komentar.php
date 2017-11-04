<?php
	include "../../config/koneksi.php";
  	include '../../config/base_url.php';

	$id_komentar= $_GET['id_komentar'];

	$sql="DELETE FROM tb_komentar WHERE id_komentar = $id_komentar";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."admin/show/show_komentar");
	}
	else{ ?>
		<script type="text/javascript">
			swal({
				text: "Gagal",
				title: "Gagal Menghapus",
				html:true
			});
		</script>
<?php } ?>
