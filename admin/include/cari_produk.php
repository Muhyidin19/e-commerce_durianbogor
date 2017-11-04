<?php
include '../../config/koneksi.php';
	include '../../config/base_url.php';

$key = $_POST['key'];

$no = 1;
$data = mysqli_query($con,"SELECT * FROM tb_produk WHERE produk LIKE '%$key%' OR jenis LIKE '%$key%' ORDER BY jenis");
?>
<?php if (mysqli_num_rows($data)==null) { ?>
	<div style='border-bottom:2px solid #ddd; padding-bottom:8px; margin-bottom:8px;'>
		<h5 class='red-text'>Mohon Maaf Tidak dapat menemukan hasil yang anda maksud . Cobalah Masukan kata kunci dengan benar.</h5>
	</div>
<?php }
		else{ ?>
			<table class="bordered responsive-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Images</th>
						<th>Nama</th>
						<th>Jenis</th>
						<th>Ukuran</th>
						<th>Asal</th>
						<th>Di Lihat</th>
						<th>Deskripsi</th>
						<th>Harga Satuan</th>
						<th>Tanggal Post</th>
						<th colspan=2><center>Aksi</center></th>
					</tr>
				</thead>

				<?php while ($hasil = mysqli_fetch_assoc($data)){ ?>

				<tbody>
					<tr>
						<td><?php echo $no++ ?></td>
						<td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/produk/<?php echo $hasil['foto'];?>"></td>
						<td><?php echo $hasil['produk']; ?></td>
						<td><?php echo $hasil['jenis']; ?></td>
						<td><?php echo $hasil['ukuran'];?></td>
						<td><?php echo $hasil['asal'];?></td>
						<td><?php echo $hasil['view'];?></td>
						<td><?php echo $hasil['deskripsi'];?></td>
						<td><?php echo $hasil['harga'];?></td>
						<td><?php echo $hasil['tanggal_post'];?></td>
						<td><a href="../edit/edit_produk?id_produk=<?php echo $hasil['id_produk']; ?>" class="btn btn-hover green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Ubah"><i class="material-icons">settings</i></a></td>
						<td><a href="../file_query/produk_hapus.php?id_produk=<?php echo $hasil['id_produk']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
					</tr>
				</tbody>
		<?php }	?>
	</table>
	<?php } ?>
