<?php
  include '../config/koneksi.php';
  include '../config/base_url.php';

  session_start();


  if (!empty($_SESSION['user'])) {

    $id_produk = $_GET['id_produk'];
    $id_user = $_SESSION['user'];
    $kirim = $_POST['jumlah'];

   if (isset($kirim)) {
    $jml = $_POST['jumlah_produk'];
    mysqli_query($con,"INSERT INTO tb_cart
                       VALUES('','$id_produk','$id_user','$jml')");
   }
    header("location:".$base_url."show/troli");
  }
  else{
    $id_produk = $_GET['id_produk'];
    $jml = $_POST['jumlah_produk'];
    $_SESSION['produk'] = array('jumlah' =>$jml, 'id_produk'=>$id_produk);
     header("location:".$base_url."login_register/login_cart.php");
 } ?>
