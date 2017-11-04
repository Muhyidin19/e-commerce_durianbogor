<?php
	include "../config/koneksi.php";
	include "../config/base_url.php";
	session_start();
		if(!empty($_SESSION['user'])){
		$id_user=$_SESSION['user'];
		$query=("SELECT
						tb_transaksi.id_transaksi,
						tb_transaksi.pembayaran,
						tb_transaksi.foto AS foto_bukti,
						tb_transaksi.expired
						FROM tb_transaksi,tb_produk,tb_user
						WHERE tb_transaksi.id_user=tb_user.id_user
						AND tb_transaksi.id_produk=tb_produk.id_produk
						AND tb_user.id_user=$id_user
						");
		$data=mysqli_query($con,$query);
		while($hasil = mysqli_fetch_assoc($data)){
		$id_transaksi=$hasil['id_transaksi'];
		$foto_bukti=$hasil['foto_bukti'];

		if ($hasil['pembayaran']=='Cash On Delivery') {
			header("location:".$base_url."show/pembelian.php");
		}
		else{
			if ($foto_bukti=='') {
			$sql="DELETE FROM tb_transaksi WHERE id_transaksi = $id_transaksi";
			$sukses=mysqli_query($con,$sql);
			if ($sukses) {
				header("location:".$base_url."show/pembelian.php");
			}
		}else {
			header("location:".$base_url."show/pembelian.php");
		}
			}
		}
	}
?>
