<?php
	include "../../config/koneksi.php";
  	include '../../config/base_url.php';

	$id_produk= $_GET['id_produk'];

	$sql="DELETE FROM tb_produk WHERE id_produk = $id_produk";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."admin/show/show_postingan");
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
