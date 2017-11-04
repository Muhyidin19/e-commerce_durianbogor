<?php
		include '../../config/koneksi.php';

		if(isset($_POST['simpan'])){

		$id_produk=$_POST['id_produk'];
		$produk=$_POST['produk'];
		$jenis=$_POST['jenis'];
		$ukuran=$_POST['ukuran'];
		$harga=$_POST['harga'];
		$stok=$_POST['stok'];
		$asal=$_POST['asal'];
		$deskripsi=$_POST['deskripsi'];

		$folder ='../images/produk/';
		$name = basename($_FILES['foto']['name']);
	  $foto = $folder . $name;

		$query="UPDATE 
				tb_produk
				SET
				id_produk='$id_produk',
				produk='$produk',
				jenis='$jenis',
				ukuran='$ukuran',
				harga= $harga,
				stok=$stok,asal='$asal',
				deskripsi='$deskripsi'";
		if ($_FILES['foto']['name']!="") {
			$query = $query.",foto = '$name'";
		}
			$query = $query." WHERE id_produk=$id_produk";
			$data=mysqli_query($con,$query);
			if ($data) {
				move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
				header("location:".$base_url."admin/show/show_postingan");
			}
		}

		$id_produk = $_GET['id_produk'];

		$query = "SELECT * FROM tb_produk WHERE id_produk=$id_produk";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);

		$id_produk=$hasil['id_produk'];
		$produkt=$hasil['produk'];
		$jenist=$hasil['jenis'];
		$ukurant=$hasil['ukuran'];
		$hargat=$hasil['harga'];
		$stokt=$hasil['stok'];
		$asalt=$hasil['asal'];
		$deskripsit=$hasil['deskripsi'];
?>
