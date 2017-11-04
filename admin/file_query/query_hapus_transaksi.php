<?php
	include "../../config/koneksi.php";
  	include '../../config/base_url.php';

	$id_transaksi= $_GET['id_transaksi'];

	$sql="DELETE FROM tb_transaksi WHERE id_transaksi = $id_transaksi";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."admin/show/show_pemesanan");
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
