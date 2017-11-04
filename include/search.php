<?php include'../config/base_url.php' ?>
<div class="container">
	<div class="col s12">
		<div class="row">
		<?php
		include '../config/koneksi.php';

		$key = $_POST['key'];

		$data = mysqli_query($con,"SELECT * FROM tb_produk WHERE produk LIKE '%$key%' OR jenis LIKE '%$key%' ORDER BY jenis");
		?>
		<?php if (mysqli_num_rows($data)==null) { ?>
			<div style='border-bottom:2px solid #ddd; padding-bottom:8px; margin-bottom:8px;'>
				<h5 class='red-text'>Mohon Maaf Tidak dapat menemukan hasil yang anda maksud . Cobalah Masukan kata kunci dengan benar.</h5>
			</div>
		<?php }
		else{
		while ($hasil = mysqli_fetch_assoc($data)){ ?>
		<div class="col s6 m4 l3">
			<div class="card medium ">
				<div class="card-image">
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
				</div>
				<div class="card-content">
					<h6><?php echo $hasil['produk']; ?></h6>
					<h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
					<h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
					<h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
					<h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
					<h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i><?php echo$hasil['view']; ?> kali dilihat</span></h6>
					<a href="<?php echo $base_url ?>show/rincian_produk.php?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
				</div>
			</div>
		</div>
		<?php }
			}
		?>
	</div>
	</div>
</div>
