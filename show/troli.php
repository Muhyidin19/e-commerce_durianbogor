	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../config/base_url.php' ?>

  <br><br>

  <!-- Troli -->
  <div class="col s12" style="min-height:550px;">
    <div class="container">
      <div class="row">
				<a href="<?php echo $base_url ?>" class="btn waves-effect waves-light" style="margin-bottom:20px;"><< Belanja Lagi</a>
        <div class="col s12 white">
					<div class="col m3 l3">
						<blockquote>
							<h5 class="black-text">Troli Belanja Saya</h5>
						</blockquote>
					</div>
					<div class="col m9 l9">
						<!-- Alert Pemberitahuan -->
						<div class="alert2">
						  <span class="closebtn2" onclick="this.parentElement.style.display='none';">&times;</span>
						  <span class="red-text">PENTING !</span> Pembelian dibawah Rp. 100.000 akan dikenakan biaya Ongkir Rp. 20.000
						</div>
						<!-- End Alert Pemberitahuan -->
					</div>
        </div>
      </div>
      <div class="row">
				<?php
				if (!empty($_SESSION['user'])) {
					$id_user=$_SESSION['user'];

					$sqlCart = "SELECT
								tb_cart.id_cart,
								tb_cart.id_user,
								tb_produk.id_produk,
								tb_produk.produk,
								tb_produk.jenis,
								tb_produk.ukuran,
								tb_produk.harga,
								tb_produk.foto,
								tb_produk.asal,
								tb_produk.deskripsi
								FROM
								tb_cart,
								tb_produk
								WHERE
								tb_cart.id_produk = tb_produk.id_produk
								AND
								tb_cart.id_user=$id_user";
					$dataCart = mysqli_query($con,$sqlCart);
					while($hasil = mysqli_fetch_array($dataCart)){
						if ($hasil['id_cart']==null) {
 							?>
							<script type="text/javascript">
								swal({
									text: "<h5 class='black-text'>Troli Kosong , Silahkan Belanja Terlebih Dahulu Agar Bisa Melihat Troli Anda</h5>",
									title: "<b class='red-text'>Belanja Terlebih Dahulu</b>",
									type: "warning",
									html:true
								},function(){
									window.location.href = "<?php echo $base_url ?>login_register/login.php"
								});
							</script>
					<?php }
				?>
        <div class="col s12 m7 l7 white ">
          <div class="col s12 m12 l12 white border-bottom margin-top padding-bottom">
            <div class="col s5 m5 l5">
              <img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto']; ?>">
            </div>
            <div class="col s7 m7 l7">
              <h6><span class="grey-text text-darken-1 name">Nama Produk : <?php echo $hasil['produk']; ?></span></h6>
							<h6><span class="grey-text text-darken-1 name">Jenis : <?php echo $hasil['jenis']; ?></span></h6>
							<h6><span class="grey-text text-darken-1 name">Ukuran : <?php echo $hasil['ukuran']; ?></span></h6>
							<h6><span class="grey-text text-darken-1 name">Daerah Asal : <?php echo $hasil['asal']; ?></span></h6>
              <h5>Rp. <?php echo $hasil['harga']; ?></h5>
							<td><a href="../file_query/query_hapus_cart.php?id_cart=<?php echo $hasil['id_cart']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
            </div>
          </div>
        </div>
				<?php } ?>

				<div class="col s12 m1 l1">
        </div>

        <div class="col s12 m3 l3 white" style="top:268px;right:192px;position:absolute;">
          <div class="row">
            <div class="col s12">
							<?php
								if (!empty($_SESSION['user'])) {
											$id_user=$_SESSION['user'];
								 			$sql=("SELECT COUNT(*) FROM tb_cart WHERE id_user=$id_user");
											$query=mysqli_query($con,$sql);
			                $row=mysqli_fetch_row($query);
											mysqli_free_result($query);
									}
		          ?>
							<blockquote>
								<h5 class="black-text">Detail Order (<?php echo $row[0]; ?>) Produk</h5>
							</blockquote>
              <table class="bordered">
              	<thead>
									<th>Jml</th>
									<th>Produk</th>
              		<th>Harga</th>
									<th>Sub Total</th>
              	</thead>
								<tbody>
									<?php
										$total=0;
										$sqlCart = "SELECT
										tb_cart.id_cart,
										tb_cart.jumlah_produk,
										tb_produk.id_produk,
										tb_produk.produk,
										tb_produk.harga,
										tb_cart.jumlah_produk * tb_produk.harga as total
										FROM tb_cart, tb_produk
										WHERE tb_cart.id_produk = tb_produk.id_produk
										AND tb_cart.id_user=$id_user ";

										$totalCart = mysqli_query($con,$sqlCart);
										while($hasil = mysqli_fetch_array($totalCart)){
										$id_produk=$hasil['id_produk'];
										$id_cart=$hasil['id_cart'];
										$ongkir=20000;
										$total+=$hasil['total'];
										$total_ongkir=$total+$ongkir;
										$jumlah[]= $hasil;
										$_SESSION['jumlah'] = $jumlah;
									 ?>
									<tr>
										<td><?php echo $hasil['jumlah_produk']; ?></td>
										<td><?php echo $hasil['produk']; ?></td>
										<td>Rp. <?php echo $hasil['harga']; ?></td>
										<td>Rp. <?php echo $hasil['total']; ?></td>
									</tr>
									<?php } ?>
									<tr>
										<?php if (empty($total)) { ?>
											<td colspan="2">Biaya Ongkir</td> <td>:</td> <td>Rp. 0</td>
										<?php } else{ ?>
										<?php if ($total<100000){ ?>
											<td colspan="2">Biaya Ongkir</td> <td>:</td> <td>Rp. <?php echo $ongkir; ?></td>
										<?php }else{ ?>
											<td colspan="2">Biaya Ongkir</td> <td>:</td> <td>Rp. 0</td>
										<?php } } ?>
									</tr>
									<tr>
										<?php if (empty($total)){ ?>
											<td colspan="2"><h5>Total Harga </h5></td> <td> : </td> <td>Rp. 0</h5></td>
										<?php } else {?>
										<?php if ($total<100000){ ?>
											<td colspan="2"><h5>Total Harga </h5></td> <td> : </td> <td>Rp. <?php echo"$total_ongkir"; ?></h5></td>
										<?php }else{ ?>
											<td colspan="2"><h5>Total Harga </h5></td> <td> : </td> <td>Rp. <?php echo"$total"; ?></h5></td>
										<?php } } ?>
									</tr>
								</tbody>
              </table>
            </div>
            <div class="col s12">
              <a class="btn waves-effect waves-light red darken-1 fullbtn" href="<?php echo $base_url ?>checkout/pengiriman">Lanjut Ke Pembayaran</a>
            </div>
          </div>
        </div>
				<?php } else { ?>
					<script type="text/javascript">
						swal({
							text: "<h5 class='black-text'>Anda Belum Login , Silahkan Login Terlebih Dahulu Agar Bisa Melihat Troli Anda</h5>",
							title: "<b class='red-text'>Login Terlebih Dahulu</b>",
							confirmButtonText: "Login",
							type: "warning",
							html:true
						},function(){
							window.location.href = "<?php echo $base_url ?>login_register/login.php"
						});
					</script>
				<?php } ?>

      </div>
    </div>
  </div>
  <!-- End Troli -->

  <br>

	<?php include'../include/footer.php'; ?>
