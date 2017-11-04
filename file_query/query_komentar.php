<?php
include '../config/koneksi.php';
include '../config/waktu.php';
include '../config/base_url.php';

function ubahKata($kalimat){
 	$kataKasar = array('Anjing','Bangsat','Monyet','Kebo','Gua','Gue','Eluh','Luh','Sialan','Bunuh');
 	$hasil =str_replace($kataKasar, '*****', $kalimat);
 	return $hasil;
}
 
session_start();

$id_user = $_SESSION['user'];
$komentar = ubahKata($_POST['komentar']);
$id_produk = $_POST['id_produk'];

mysqli_query($con,"INSERT INTO tb_komentar(id_user, id_produk, komentar, waktu) VALUES('$id_user',$id_produk,'$komentar','$tgl_skrg')");
$user=mysqli_query($con,"SELECT * FROM tb_user WHERE id_user=$id_user");
$hasil=mysqli_fetch_assoc($user);
?>

<li class="collection-item avatar white black-text">
	<img src="<?php echo $base_url?>assets/images/user/<?php echo $hasil['foto'];?>" alt="" class="circle responsive-img">
	<span class="title"><?php echo $hasil['name']; ?></span><p style="float:right;"><?php echo $tgl_skrg; ?></p>
	<p><?php echo $komentar; ?></p>
</li>
