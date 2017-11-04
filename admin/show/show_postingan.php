	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
  <?php include'../include/icon_action.php'; ?>

	<div class="conta">
		<nav class="z-depth-0 conta">
			<div class="nav-wrapper" style="background-color: #dff5e1 !important;">
				<div class="input-field" id="search">
					<input id="cariproduk" type="search" name="search" rows="1" required placeholder="Cari Produk">
					<label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
					<i class="material-icons">close</i>
				</div>
			</div>
		</nav>
	</div>

  <br><br>

  <!-- Content -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white radius z-depth-1 padding-add">
				<div class="hasil-cari"></div>
				<div id="cari-ilang">
						<div class="col s12 m12 black-text">
		          <?php $sql=("SELECT COUNT(*) from tb_produk");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
							<blockquote>
								<h3 class="black-text"><i class="material-icons">tab </i> Postingan Produk</h3>
							</blockquote>
								<h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah Postingan : <?php echo $row[0]; ?> </h4><div class="divider"></div>
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
		            <tbody>
		              <?php
		                $no=1;
		                $query=("SELECT * FROM tb_produk ORDER BY id_produk DESC");
		                $data=mysqli_query($con,$query);
		                while($hasil = mysqli_fetch_assoc($data)){
		              ?>
		              <tr>
		                <td><?php echo $no++ ?></td>
										<?php if ($hasil['foto']==null){ ?>
											<td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/not_found/no_image.png"></td>
										<?php }else{ ?>
											<td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/produk/<?php echo $hasil['foto'];?>"></td>
										<?php } ?>
										<td><?php echo $hasil['produk']; ?></td>
		                <td><?php echo $hasil['jenis']; ?></td>
		                <td><?php echo $hasil['ukuran'];?></td>
		                <td><?php echo $hasil['asal'];?></td>
		                <td><?php echo $hasil['view'];?></td>
										<td><?php echo $hasil['deskripsi'];?></td>
		                <td><?php echo $hasil['harga'];?></td>
		                <td><?php echo $hasil['tanggal_post'];?></td>
		                <td><a href="<?php echo $base_url; ?>admin/edit/edit_produk?id_produk=<?php echo $hasil['id_produk']; ?>" class="btn btn-hover green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Ubah"><i class="material-icons">settings</i></a></td>
		                <td><a href="<?php echo $base_url; ?>admin/file_query/query_hapus_produk?id_produk=<?php echo $hasil['id_produk']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
		              </tr>
		              <?php } ?>
		            </tbody>
		          </table>
		          <div class="padding-bottom"></div>
		        </div>
					</div>
      </div>
    </div>
  </div>
  <!-- End Contents -->

  <br><br>

	<?php include'../include/footer.php'; ?>
