<?php
	include "../../config/koneksi.php";
 	include '../../config/base_url.php';

	$id_keluhan= $_GET['id_keluhan'];

	$sql="DELETE FROM tb_keluhan WHERE id_keluhan = $id_keluhan";
	$sukses=mysqli_query($con,$sql);

	if($sukses){
		header("location:".$base_url."admin/show/show_keluhan");
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
