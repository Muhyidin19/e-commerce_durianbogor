<?php
		include '../../config/koneksi.php';

		if(isset($_POST['konfirmasi'])){
		$id_transaksi=$_POST['id_transaksi'];
		$status=$_POST['status'];

		$query="UPDATE tb_transaksi
						SET
						id_transaksi='$id_transaksi',
						status='$status'
						WHERE
						id_transaksi=$id_transaksi";
		$data=mysqli_query($con,$query);

		if ($data) {
			header("location:".$base_url."admin/show/show_pemesanan");
		}
		}

		$id_transaksi = $_GET['id_transaksi'];

		$query = "SELECT
							*
							FROM
							tb_transaksi
							WHERE
							id_transaksi=$id_transaksi";
		$data = mysqli_query($con,$query);
		$hasil = mysqli_fetch_assoc($data);
		$id_transaksit=$hasil['id_transaksi'];
		$statust=$hasil['status'];
?>
