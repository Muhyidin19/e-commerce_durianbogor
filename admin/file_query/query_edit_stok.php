<?php
		include '../../config/koneksi.php';

		if(isset($_POST['updatestok'])){
		$id_produk=$_POST['id_produk'];
		$stok=$_POST['stok'];

		$query="UPDATE tb_produk
						SET
						id_produk='$id_produk',
						stok='$stok'
						WHERE
						id_produk=$id_produk";
		$data=mysqli_query($con,$query);

		if ($data) {
			header("location:".$base_url."admin/show/show_pemasukan");
		}
		}

		$id_produk = $_GET['id_produk'];

		$query = "SELECT * FROM tb_produk WHERE id_produk=$id_produk";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);
		$id_produkt=$hasil['id_produk'];
		$stokt=$hasil['stok'];
?>
