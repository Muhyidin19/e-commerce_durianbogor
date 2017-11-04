	<?php include'../include/header.php'; ?>
	<?php include'../config/base_url.php'; ?>
	<!-- Nav -->
  <nav class="nav">
    <div class="nav-wrapper">
      <div class="conta">
        <a href="<?php echo $base_url;?>" class="brand-logo brand"><img class="responsive-img" src="<?php echo $base_url;?>assets/images/logo/logo.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="large material-icons">reorder</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down navright">
          <li class="padding-left-right active yes-yellow black-text">Transaksi</li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li class="padding-left-right active yes-yellow black-text">Transaksi</li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Nav -->

  <br><br>

  <!-- Content Pengiriman -->
  <div class="col s12">
    <div class="container">
      <!-- Judul -->
      <div class="row judul-atas">
        <div class="col s12">
          <div class="row">
            <div class="col s12 m6 l6 white ">
				<blockquote>
					<h5 class="black-text">Alamat Pengiriman</h5>
				</blockquote>
            </div>
            <div class="col s1">
            </div>
            <div class="col s12 m5 l5 white ">
				<blockquote>
					<h5 class="black-text">Detail Order</h5>
				</blockquote>
            </div>
          </div>
        </div>
      </div>
      <!-- End Judul -->

      <div class="row row-troli">
        <!-- Kiri -->
				<?php
				if (!empty($_SESSION['user'])) {
						$id_user=$_SESSION['user'];
				 		$query="SELECT * FROM tb_user WHERE id_user=$id_user";
						$data=mysqli_query($con,$query);
						while($hasil=mysqli_fetch_array($data)){
				?>
          <div class="col s12 m6 l6 white ">
            <div class="row">
              <div class="border-all">
                <h6><?php echo $hasil['name']; ?></h6>
                <p><?php echo $hasil['alamat']; ?></p>
                <p><?php echo $hasil['telepon']; ?></p>
              </div>
							<?php if (empty($_SESSION['jumlah'])) {

							} else { ?>
							<form class="" action="../file_query/query_checkout.php?id_user=<?php echo $hasil['id_user'];?>" method="post">
								<div class="col s12 border-bottom">
		              <div class="col s6" style="padding-bottom:10px;">
										<br>
		              	<img class="responsive-img" src="<?php echo $base_url; ?>assets/images/contact/bri.png">
		              </div>
	                <div class="col s6">
										<h5><b>Bank BRI</b></h5>
		                <p>No Rekening : 13201245658794</p>
										<p>Atas Nama : Durian Bogor</p>
		                <p>
		                  <input class="with-gap" name="pembayaran" type="radio" id="bri" value="Bank BRI">
		                  <label for="bri">Pilih Bank BRI</label>
		                </p>
	                </div>
		            </div>
								<div class="col s12 border-bottom" style="padding-bottom:10px;">
		              <div class="col s6">
										<br>
		              	<img class="responsive-img" src="<?php echo $base_url; ?>assets/images/contact/bca.png">
		              </div>
	                <div class="col s6">
										<h5><b>Bank BCA</b></h5>
		                <p>No Rekening : 13201245658794</p>
										<p>Atas Nama : Durian Bogor</p>
		                <p>
		                  <input class="with-gap" name="pembayaran" type="radio" id="bca" value="Bank BCA">
		                  <label for="bca">Pilih Bank BRI</label>
		                </p>
	                </div>
		            </div>
								<div class="col s12 border-bottom" style="padding-bottom:10px;">
		              <div class="col s6">
		              	<img class="responsive-img" style="margin-top:10px;" src="<?php echo $base_url; ?>assets/images/contact/cod_2.png">
		              </div>
	                <div class="col s6">
										<h5><b>Cash On Delivery</b></h5>
		                <p>Pembayaran di Tempat</p>
		                <p>
		                  <input class="with-gap" name="pembayaran" type="radio" id="cod" value="Cash On Delivery">
		                  <label for="cod">Pilih COD</label>
		                </p>
	                </div>
		            </div>
		            <div class="col s12 margin-top">
		                <button type="submit" class="btn checkout waves-effect waves-light red darken-1 fullbtn" name="checkout">Konfirmasi</button>
								</div>
							</form>
							<?php } ?>
						</div>
					</div>
				<?php } } ?>
				<!-- End Kiri -->

        <div class="col s12 m1 l1">
        </div>

        <!-- Kanan -->
				<div class="col s12 m5 l5 white ">
          <div class="row">
            <div class="col s12">
							<?php
								if (!empty($_SESSION['user'])) {
										$id_user=$_SESSION['user'];
										$query="SELECT COUNT(*) FROM tb_cart WHERE id_user=$id_user";
										$cart=mysqli_query($con,$query);
										$hasil=mysqli_fetch_row($cart);
									}
		          ?>
							<?php if ($id_user==null){ ?>

							<?php } else{ ?>
							<blockquote>
              	<h5 class="black-text">Detail Order (<?php echo $hasil[0]; ?>) Produk</h5>
							</blockquote>
							<?php } ?>
							<table class="bordered">
              	<thead>
									<th>Jml</th>
									<th>Produk</th>
              		<th>Harga</th>
									<th>Sub Total</th>
              	</thead>
								<?php if (empty($_SESSION['jumlah'])) {

								} else {

									$total =0;
									foreach ($_SESSION['jumlah'] as $key => $value):
									$total += $_SESSION['jumlah'][$key]['total'];
									$ongkir=20000;
									$total_ongkir=$total+$ongkir;
								 ?>
								 <tr>
										<td><?php echo $_SESSION['jumlah'][$key]['jumlah_produk']; ?></td>
										<td><?php echo $_SESSION['jumlah'][$key]['produk']; ?></td>
										<td><?php echo $_SESSION['jumlah'][$key]['harga']; ?></td>
										<td><?php echo $_SESSION['jumlah'][$key]['total']; ?></td>
									</tr>
								<?php endforeach ?>
								<tr>
									<?php if ($total<100000){ ?>
										<td colspan="2">Biaya Ongkir</td> <td>:</td> <td>Rp. <?php echo $ongkir; ?></td>
									<?php }else{ ?>
										<td colspan="2">Biaya Ongkir</td> <td>:</td> <td>Rp. 0</td>
									<?php } ?>
								</tr>
								<tr>
									<?php if ($total<100000){ ?>
									<td colspan="2"><h5>Total Harga </h5></td> <td> : </td> <td>Rp. <?php echo"$total_ongkir"; ?></h5></td>
										<?php }else{ ?>
										<td colspan="2"><h5>Total Harga </h5></td> <td> : </td> <td>Rp. <?php echo"$total"; ?></h5></td>
									<?php } ?>
								</tr>
								<?php } ?>
								</tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Kanan -->
      </div>
    </div>
  </div>
  <!-- End Content Pengiriman -->

  <br>

	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/footer.php'; ?>
