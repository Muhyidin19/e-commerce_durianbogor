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
          <h3 class="black-text"><i class="material-icons">receipt</i> Laporan Omset Penjualan</h3>
        </blockquote>
        <div class="row">
          <hr>
        </div>
        <table class="bordered responsive-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Jumlah Produk Terjual</th>
              <th>Jumlah Pendapatan</th>
              <th>Per Tanggal</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
                $total=0;
                $no=1;
                $query="SELECT tanggal_transaksi,total,COUNT(tanggal_transaksi) AS perhari, SUM(total) AS totalsemua FROM tb_transaksi GROUP BY tanggal_transaksi ";
                $trans=mysqli_query($con,$query);
                while($hasil=mysqli_fetch_assoc($trans)):
                  $total=$hasil['totalsemua'];
             ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td class="white-tipis"><span class="red-text"><b><?php echo $hasil['perhari']; ?></b></span> (Produk)</td>
              <td class="white-tipis">Rp. <span class="red-text"><?php echo $total; ?></span></td>
              <td class="white-tipis"><span class="red-text"><?php echo $hasil['tanggal_transaksi']; ?></span></td>
              <td><a href="<?php echo $base_url; ?>admin/show/show_detail_omset?tanggal_transaksi=<?php echo $hasil['tanggal_transaksi']; ?>" class="btn btn-hover green waves-effect waves-light" ><i class="material-icons right">description</i> Detail Omset Penjualan</a></td>
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
