<?php
  include '../../config/koneksi.php';
  include '../../config/base_url.php';

  if(isset($_POST['simpan'])){

  $produk=$_POST['produk'];
  $jenis=$_POST['jenis'];
  $ukuran=$_POST['ukuran'];
  $harga=$_POST['harga'];
  $stok=$_POST['stok'];
  $asal=$_POST['asal'];
  $tanggal_post=$_POST['tanggal_post'];
  $deskripsi=$_POST['deskripsi'];

  $folder ='../../images/produk/';
  $name = basename($_FILES['foto']['name']);
  $foto = $folder . $name;

  $post=("INSERT INTO tb_produk
          VALUES(
          '',
          '$produk',
          '$jenis',
          '$ukuran',
          '$harga',
          '$name',
          '$stok',
          '$asal',
          '$tanggal_post',
          '$deskripsi',
          '',
          '')
          ");
  $data=mysqli_query($con,$post);

  if ($data) {
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
      header("location:".$base_url."admin/show/show_postingan");
  }
  }
?>
