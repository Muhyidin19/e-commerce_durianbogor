<?php
  include "../../config/koneksi.php";
  include '../../config/base_url.php';

  $id_user= $_GET['id_user'];

  $sql="DELETE FROM tb_user WHERE id_user = $id_user";
  $sukses=mysqli_query($con,$sql);

  if($sukses){
  header("location:".$base_url."admin/show/show_user");
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
