	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/icon_action.php'; ?>

  <br><br><br>

  <!-- Content -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white  radius z-depth-1 padding-add">
        <div class="col s12 m12 black-text">
					<blockquote>
						<h3 class="black-text"><i class="material-icons">shop</i> Pemesanan Produk</h3>
					</blockquote>
          <div class="row">
            <div class="col s12 m8 l8">
            </div>
						<?php $sql=("SELECT COUNT(*) from tb_transaksi");
									$query=mysqli_query($con,$sql);
									$row=mysqli_fetch_row($query);
									mysqli_free_result($query);
						?>
            <div class="col s12 m4 l4">
              <h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah Pemesanan : <?php echo $row[0]; ?></h4>
            </div>
            <hr>
          </div>
          <table class="bordered responsive-table">
            <thead>
              <tr>
                <th>No</th>
								<th>No Transaksi</th>
                <th>Produk</th>
                <th>Status</th>
                <th>Konfirmasi</th>
								<th>Detail</th>
								<th>Opsi</th>
              </tr>
            </thead>
            <tbody>
							<?php
									$no=1;
									$query="SELECT * FROM tb_transaksi,tb_produk,tb_user WHERE tb_transaksi.id_produk=tb_produk.id_produk AND tb_transaksi.id_user=tb_user.id_user";
									$trans=mysqli_query($con,$query);
									while($hasil=mysqli_fetch_assoc($trans)):
							 ?>
              <tr>
                <td><?php echo $no++ ?></td>
								<td><?php echo $hasil['id_transaksi']; ?></td>
                <td><?php echo $hasil['produk']; ?></td>
								<?php if ($hasil['status']==""){ ?>
									<td>Belum di Konfirmasi</td>
								<?php } else{?>
                <td><?php echo $hasil['status']; }?></td>
								<td><a href="<?php echo $base_url; ?>admin/post/konfirmasi?id_transaksi=<?php echo $hasil['id_transaksi']; ?>" class="btn btn-hover yes-red waves-effect waves-light"><i class="material-icons right">description</i>Konfirmasi Pemesanan</a></td>
								<td><a href="<?php echo $base_url; ?>admin/show/show_detail_transaksi?id_transaksi=<?php echo $hasil['id_transaksi']; ?>" class="btn btn-hover green waves-effect waves-light" ><i class="material-icons right">description</i> Detail Pemesanan</a></td>
								<?php if ($hasil['status']=="Produk telah di Terima"){ ?>
									<td><a href="<?php echo $base_url; ?>admin/file_query/query_hapus_transaksi?id_transaksi=<?php echo $hasil['id_transaksi']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
									<td></td>
								<?php }else{ ?>
									<td></td>
									<td></td>
								<?php } ?>
              </tr>
						<?php endwhile ?>
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
