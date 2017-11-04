<?php include'../include/header.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../include/slide-out.php'; ?>
<?php include'../include/back_to_top.php'; ?>
<?php include'../include/icon_action.php'; ?>

<br><br>

<div class="conta" style="min-height:400px;">
    <div class="row">
      <div class="col s12">
        <div class="row white padding-add radius z-depth-1">
          <!-- Detail Omset -->
          <div class="col s12">
            <div class="row"><br>
              <blockquote>
                <h3 class="black-text"><i class="material-icons">receipt</i>Detail Laporan Omset Penjualan</h3>
              </blockquote>
              <h4 class="font-right"><i class="material-icons">equalizer </i> Tanggal Penjualan : <?php echo $_GET['tanggal_transaksi']; ?> </h4><div class="divider"></div>
            </div>
          </div>
          <div class="col s12 m12 l12 black-text">
            <div class="row">
              <table class="bordered responsive-table">
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Produk</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Ongkir</th>
                    <th>Total</th>
                    <th>Pembeli</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $tanggal_transaksi=$_GET['tanggal_transaksi'];
                      $total=0;
                      $query="SELECT
                            tb_transaksi.jumlah,
                            tb_transaksi.total,
                            tb_transaksi.tanggal_transaksi,
                            tb_produk.produk,
                            tb_produk.ukuran,
                            tb_produk.foto,
                            tb_produk.harga,
                            tb_user.id_user,
                            tb_user.name
                            FROM
                            tb_transaksi,
                            tb_produk,
                            tb_user
                            WHERE
                            tb_transaksi.id_produk=tb_produk.id_produk
                            AND
                            tb_transaksi.id_user=tb_user.id_user
                             ";
                      $trans=mysqli_query($con,$query);
                      while($hasil=mysqli_fetch_assoc($trans)):
                        $total=$hasil['total'];
                        $ongkir=20000;
                   ?>
                  <tr>
                    <?php if ($hasil['tanggal_transaksi']==$tanggal_transaksi){ ?>
                      <td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/produk/<?php echo $hasil ['foto'];?>"></td>
                      <td><?php echo $hasil['produk']; ?></td>
                      <td><?php echo $hasil['ukuran']; ?></td>
                      <td><?php echo $hasil['jumlah']; ?></td>
                      <td>Rp. <?php echo $hasil['harga']; ?></td>
                      <?php if ($total<100000){ ?>
                        <td>Rp. <?php echo $ongkir; ?></td>
                      <?php } else { ?>
                        <td>Rp. 0</td>
                      <?php } ?>
                      <td>Rp. <?php echo $hasil['total']; ?></td>
                      <td><?php echo $hasil['name'] ?></td>
                      <?php } ?>
                  </tr>
                  <?php endwhile ?>
                  <!-- <tr>
                    <td colspan="2" class="green white-text">Total Produk di Jual</td>
                    <td class="green white-text">:</td>
                    <td colspan="2" class="green white-text">Rp. </td>
                    <td class="red white-text">Total Pendapatan</td>
                    <td class="red white-text">:</td>
                    <td class="red white-text">Rp. </td>
                  </tr>-->
                </tbody>
              </table><br>
            </div>
          </div>
          <div class="col s1 m1 l1">
          </div>
          <!-- Akhir Detail Omset -->
      </div>
    </div>
  </div>
</div>

<br><br>

<?php include'../include/footer.php'; ?>
