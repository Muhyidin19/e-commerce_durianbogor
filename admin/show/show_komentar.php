	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/icon_action.php'; ?>

  <br><br><br>

  <!-- Data Komentar -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white  radius z-depth-1 padding-add">
        <div class="col s12 m12 black-text">
					<blockquote>
						<h3 class="black-text"><i class="material-icons">comment</i> Data Komentar</h3>
					</blockquote>
          <div class="row">
            <div class="col s12 m8 l8">
            </div>
            <div class="col s12 m4 l4">
							<?php $sql=("SELECT COUNT(*) from tb_komentar");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah Komentar : <?php echo $row[0]; ?></h4>
            </div>
            <hr>
          </div>
          <table class="bordered responsive-table">
            <thead>
              <tr>
                <th>No</th>
								<th>Foto</th>
                <th>Nama</th>
                <th>Komentar</th>
								<th>Id Produk</th>
                <th>Produk</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
							<?php
								$no=1;
								$sqlKomentar = "SELECT
																tb_komentar.id_komentar,
																tb_komentar.komentar,
																tb_komentar.waktu,
																tb_user.name,
																tb_user.foto,
																tb_produk.id_produk,
																tb_produk.produk
																FROM
																tb_komentar,
																tb_user,
																tb_produk
																WHERE
																tb_komentar.id_user = tb_user.id_user
																AND
																tb_komentar.id_produk = tb_produk.id_produk ";
							 	$dataKomentar = mysqli_query($con,$sqlKomentar);
								while ( $hKomentar = mysqli_fetch_assoc($dataKomentar)) { ?>
              <tr>
                <td><?php echo $no++; ?></td>
								<td style="width:100px; height:100px;"><img class="materialboxed responsive-img circle" src="<?php echo $base_url; ?>assets/images/user/<?php echo $hKomentar['foto'];?>"></td>
								<td><?php echo $hKomentar['name']; ?></td>
                <td><?php echo $hKomentar['komentar']; ?></td>
								<td><?php echo $hKomentar['id_produk']; ?></td>
                <td><?php echo $hKomentar['produk']; ?></td>
                <td><a href="<?php echo $base_url; ?>admin/file_query/query_hapus_komentar?id_komentar=<?php echo $hKomentar['id_komentar']; ?>" class="btn delete_data fullbtn btn-hover red waves-effect waves-light"><i class="material-icons">delete</i></a></td>
              </tr>
							<?php } ?>
            </tbody>
          </table>
          <div class="padding-bottom"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Data Komentar -->

  <br><br>

<?php include'../include/footer.php'; ?>
