  <?php include'../include/header.php'; ?>
  <?php include'../include/nav.php'; ?>
  <?php include'../include/slide-out.php'; ?>
  <?php include'../include/back_to_top.php'; ?>
  <?php include'../include/icon_action.php'; ?>

  <br><br>

  <div class="conta" style="min-height:400px;">
      <div class="row">
        <div class="col s12">
          <div class="row white  radius z-depth-1">
            <!-- Data Produk -->
            <div class="col s12">
              <div class="row"><hr><br>
                <blockquote>
                  <h4 class="black-text center">Data Produk</h4>
                </blockquote>
              </div><hr>
            </div>
            <div class="col s12 m1 l1">
            </div>
            <div class="col s12 m10 black-text">
              <div class="row">
                <table class="bordered responsive-table">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Ongkir</th>
                      <th>Total</th>
                      <th>Tanggal Beli</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $id_transaksi=$_GET['id_transaksi'];
      									$query="SELECT
                              tb_transaksi.jumlah,
                              tb_transaksi.total,
                              tb_transaksi.tanggal_transaksi,
                              tb_produk.produk,
                              tb_produk.foto,
                              tb_produk.harga
                              FROM
                              tb_transaksi,
                              tb_produk
                              WHERE
                              tb_transaksi.id_transaksi=$id_transaksi
                              AND
                              tb_transaksi.id_produk=tb_produk.id_produk ";
      									$trans=mysqli_query($con,$query);
      									while($hasil=mysqli_fetch_assoc($trans)):
                          $ongkir=20000;
                     ?>
                    <tr>
                      <td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/produk/<?php echo $hasil ['foto'];?>"></td>
                      <td><?php echo $hasil['produk']; ?></td>
                      <td><?php echo $hasil['jumlah']; ?></td>
                      <td>Rp. <?php echo $hasil['harga']; ?></td>
                      <?php if ($hasil['total']<100000){ ?>
                        <td>Rp. <?php echo $ongkir; ?></td>
                      <?php } else { ?>
                        <td>Rp. 0</td>
                      <?php } ?>
                      <td>Rp. <?php echo $hasil['total']; ?></td>
                      <td><?php echo $hasil['tanggal_transaksi']; ?></td>
                    </tr>
                    <?php endwhile ?>
                  </tbody>
                </table><br>
              </div>
            </div>
            <div class="col s1 m1 l1">
            </div>
            <!-- End Data Produk -->

            <!-- Data Lengkap Pembeli -->
            <div class="col s12">
              <div class="row"><hr><br>
                <blockquote>
                  <h4 class="black-text center">Data Lengkap Pembeli</h4>
                </blockquote>
              </div><hr>
            </div>
            <div class="col s1 m1 l1">
            </div>
            <div class="col s12 m10 l10 black-text">
              <div class="row">
                <div class="col s12">
                  <?php
                      $id_transaksi=$_GET['id_transaksi'];
                      $query="SELECT
                              tb_user.foto,
                              tb_user.name,
                              tb_user.email,
                              tb_user.alamat,
                              tb_user.telepon,
                              tb_user.jenis_kelamin
                              FROM
                              tb_transaksi,
                              tb_user
                              WHERE
                              tb_transaksi.id_transaksi=$id_transaksi
                              AND
                              tb_transaksi.id_user=tb_user.id_user ";
                      $trans=mysqli_query($con,$query);
                      while($hasil=mysqli_fetch_assoc($trans)):
                   ?>
                  <div class="card-panel grey lighten-3">
                    <center><a href="#!user"><img class="materialboxed responsive-img circle" src="<?php echo $base_url; ?>assets/images/user/<?php echo $hasil ['foto'];?>"></a></center>
                    <center><h5><a href="#!name"><span class="black-text name"><?php echo $hasil['name']; ?></span></a></h5></center>
                    <center><h5><a href="#!email"><span class="black-text email"><?php echo $hasil['email']; ?></span></a></h5></center>
                    <div class="divider"></div><br>
                    <table>
                      <tbody>
                        <tr>
                          <h5 class="black-text"><td>Jenis Kelamin</td> <td>:</td> <td><?php echo $hasil['jenis_kelamin']; ?></td></h5>
                        </tr>
                        <tr>
                          <h5 class="black-text"><td>Alamat</td> <td>:</td> <td><?php echo $hasil['alamat']; ?></td></h5>
                        </tr>
                        <tr>
                          <h5 class="black-text"><td>Telepon</td> <td>:</td> <td><?php echo $hasil['telepon']; ?></td></h5>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <?php endwhile ?>
                </div>
              </div>
            </div>
            <div class="col m1 l1">
            </div>
            <!-- End Data Lengkap Pembeli -->

            <!-- Data Konfirmasi Pembayaran -->
            <div class="col s12">
              <div class="row"><hr><br>
                <blockquote>
                  <h4 class="black-text center">Data Konfirmasi Pembayaran</h4>
                </blockquote>
              </div><hr>
            </div>
            <div class="col s1 m1 l1">
            </div>
            <div class="col s12 m10 black-text">
              <div class="row">
              <table class="bordered responsive-table">
                <thead>
                  <tr>
                    <th>No Transaksi</th>
                    <th>Pembayaran Lewat</th>
                    <th>Jumlah Bayar</th>
                    <th>Foto Bukti</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $id_transaksi=$_GET['id_transaksi'];
                        $query="SELECT
                                tb_transaksi.id_transaksi,
                                tb_transaksi.pembayaran,
                                tb_transaksi.total,
                                tb_transaksi.foto
                                FROM
                                tb_transaksi
                                WHERE tb_transaksi.id_transaksi=$id_transaksi";
                        $trans=mysqli_query($con,$query);
                        while($hasil=mysqli_fetch_assoc($trans)):
                     ?>
                    <tr>
                      <td><?php echo $hasil['id_transaksi']; ?></td>
                      <td><?php echo $hasil['pembayaran']; ?></td>
                      <td>Rp. <?php echo $hasil['total']; ?></td>
                      <?php if($hasil['pembayaran']=="Cash On Delivery"){ ?>
                        <td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/contact/cod.png"></td>
                      <?php } else{
                        if ($hasil['foto']==null){ ?>
                          <td>Belum Ada</td>
                        <?php } else{ ?>
                          <td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/bukti_pembayaran/<?php echo $hasil ['foto'];?>"></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                  <?php endwhile ?>
                  </tbody>
                </table><br>
              </div>
            </div>
            <div class="col m1 l1">
            </div>
            <!-- End Data Konfirmasi Pembayaran -->
        </div>
      </div>
    </div>
  </div>

  <br><br>

  <?php include'../include/footer.php'; ?>
