<?php
	include "../../config/koneksi.php";
  	include '../../config/base_url.php';

	$id_tanggapan= $_GET['id_tanggapan'];

	$sql="DELETE FROM tb_tanggapan WHERE id_tanggapan = $id_tanggapan";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."admin/show/show_detail_keluhan");
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
