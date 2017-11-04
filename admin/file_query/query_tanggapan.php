<?php
  include '../../config/koneksi.php';
  include '../../config/waktu.php';

  if(isset($_POST['tanggapi'])){

  if (!empty($_SESSION['user'])) {

  $id_admin=$_SESSION['user'];

  $id_keluhan=$_GET['id_keluhan'];
  $tanggapan=$_POST['tanggapan'];

  $post="INSERT INTO tb_tanggapan
          (
          id_admin,
          id_keluhan,
          tanggapan,
          waktu
          )
          VALUES(
          '$id_admin',
          '$id_keluhan',
          '$tanggapan',
          '$waktu'
          )
          ";
  $data=mysqli_query($con,$post);

  if ($data) {
    header("location:".$base_url."admin/show/show_detail_keluhan?id_keluhan=$id_keluhan");
  }
  }
  }
?>
