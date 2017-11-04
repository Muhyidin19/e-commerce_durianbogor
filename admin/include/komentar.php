<?php
	include '../../config/koneksi.php';
	include '../../config/waktu.php';
?>

<?php
	$sqlKomentar = "SELECT
					tb_komentar.komentar,
					tb_komentar.waktu,
					tb_user.name,
					tb_user.foto,
					tb_produk.produk
					FROM
					tb_komentar,
					tb_user,
					tb_produk
					WHERE
					tb_komentar.id_user = tb_user.id_user
					AND tb_komentar.id_produk = tb_produk.id_produk ";
 	$dataKomentar = mysqli_query($con,$sqlKomentar);
?>

	<!-- Comment -->
	<div class="fixed-action-btn horizontal down-right">
	  <a class="btn-floating btn-large green pulse tooltipped" data-position="top" data-delay="50" data-tooltip="News Komentar" href="#modal1">
	    <i class="large material-icons">comment</i>
	  </a>
	</div>
	<div id="modal1" class="modal fullmodal-width bottom-sheet dark">
	  <div class="modal-content white">
	    <h4 class="white-text">News Komentar</h4>
			<ul class="collection white">
				<?php while ( $hKomentar = mysqli_fetch_assoc($dataKomentar)) { ?>
				<li class="collection-item avatar white black-text">
					<img src="<?php echo $base_url; ?>assets/images/user/<?php echo $hKomentar['foto']; ?>" alt="" class="materialboxed responsive-img circle">
					<span class="title"><?php echo $hKomentar['name']; ?></span><p style="float:right;"><?php echo $tgl_skrg; ?></p>
					<p>Mengomentari : <span class="green-text"> <?php echo $hKomentar['produk']; ?></span> </p>
					<p>Isi Komentar : <?php echo $hKomentar['komentar']; ?></p>
				</li>
				<?php } ?>
			</ul>
	  </div>
	</div>
	<!-- End Comment -->
