	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/icon_action.php'; ?>

  <br><br><br>

  <!-- Content -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white radius z-depth-1 padding-add">
        <div class="col s12 m12 black-text">
					<blockquote>
						<h3 class="black-text"><i class="material-icons">input </i> Pemasukan Produk</h3>
					</blockquote>
          <br>
          <div class="row">
            <div class="col s12 m8 l8">
              <a href="<?php echo $base_url; ?>admin/post/posting" class="btn yes-yellow red tooltipped" data-position="top" data-delay="50" data-tooltip="Tambah Produk"><i class="material-icons right">play_for_work</i> Tambah Produk</a>
            </div>
            <div class="col s12 m4 l4">
							<?php $sql=("SELECT COUNT(*) from tb_produk");
										$query=mysqli_query($con,$sql);
										$row=mysqli_fetch_row($query);

							?>
              <h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah Pemasukan : <?php echo $row[0]; ?></h4>
            </div>
            <hr>
          </div>
          <table class="bordered responsive-table">
            <thead>
              <tr>
                <th>No</th>
								<th>Foto</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Asal</th>
								<th>Stok</th>
                <th>Jumlah Barang Terjual</th>
                <th>Ubah Stok</th>
              </tr>
            </thead>
            <tbody>
							<?php
                $no=1;
                $query=("SELECT * FROM tb_produk");
                $data=mysqli_query($con,$query);
                while($hasil = mysqli_fetch_assoc($data)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
								<td><img style="width:120px; heiight:120px;" class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/produk/<?php echo $hasil['foto']; ?>"></td>
                <td><?php echo $hasil['produk']; ?></td>
								<td><?php echo $hasil['jenis']; ?></td>
                <td><?php echo $hasil['asal']; ?></td>
                <td><?php echo $hasil['stok']; ?></td>
                <td><center><?php echo $hasil['terjual']; ?></center></td>
                <td><a href="<?php echo $base_url; ?>admin/edit/edit_stok?id_produk=<?php echo $hasil['id_produk']; ?>" class="btn green fullbtn btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Ubah Stok"><i class="material-icons">library_add</i></a></td>
              </tr>
							<?php } ?>
            </tbody>
          </table>
          <div class="padding-bottom"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contents -->

  <br><br>

	<?php include'../include/footer.php'; ?>
