	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../config/waktu.php' ?>
	<?php include'../config/base_url.php' ?>

  <br><br>
	<?php
		if(!empty($_SESSION['user'])){
			$id_user=$_SESSION['user'];
			$query="SELECT COUNT(*) FROM tb_transaksi WHERE tb_transaksi.id_user=$id_user";
			$sql=mysqli_query($con,$query);
			$row=mysqli_fetch_row($sql);
		}
	 ?>
	<!-- Pembelian -->
	<div class="col s12">
		<div class="conta">
	  	<div class="row">
				<div class="col s12 white z-depth-1" style="margin-bottom:30px;padding-left:20px;padding-right:20px;padding-bottom:20px;">
					<div class="col s5 m9 l9">
						<blockquote>
							<h5 class="black-text">Data Pembelian</h5>
						</blockquote>
					</div>
					<div class="col s7 m3 l3">
						<blockquote>
							<h5 class="black-text">Jumlah Pembelian : <span class="orange-text"><b>
								<?php if (empty($_SESSION['user'])) {
								}else{ echo $row[0]; } ?></b></span></h5>
						</blockquote>
					</div>
					<div class="col s3" style="padding-left:10px;">
						<div class="jam" style="background-color:#fafff7;">
							<div class="text" style="position:relative;padding:0px;margin:0px !important;">
								<h5 class="black-text">Jam Saat Ini<h5>
								<h4 class="val" style="padding-bottom:0px;font-size:2.5rem;"><div id="color_timer"></div></h4>
							</div>
							<script>
	                $(function(){
	                    $('#color_timer').countdowntimer({
	                        currentTime : true,
	                        size : "lg"
	                    });
	                });
	            </script>
						</div>
					</div>
					<?php if (!empty($_SESSION['user'])) {
						$id_user = $_SESSION['user'];
						$query=("SELECT
										tb_transaksi.id_transaksi,
										tb_transaksi.pembayaran,
										tb_transaksi.foto AS foto_bukti,
										tb_transaksi.expired
										FROM tb_transaksi,tb_produk,tb_user
										WHERE tb_transaksi.id_user=tb_user.id_user
										AND tb_transaksi.id_produk=tb_produk.id_produk
										AND tb_user.id_user=$id_user
										");
						$data=mysqli_query($con,$query);
						while($hasil = mysqli_fetch_assoc($data)){
							if ($hasil['pembayaran']!="Cash On Delivery") {
								if ($hasil['foto_bukti']==null) { ?>
									<div class="col s9">
										<div class="col s12 jam" style="background-color:#fafff7;padding-top:10px;padding-bottom:10px;padding:5px;">
											<center><p>Pembelian Anda akan dihapus apabila anda tidak melakukan Verifikasi pembayaran melewati dari batas waktu 1 Jam:</p>
											<h4 class="red-text"><b>Terhitung Sejak Jam : <?php echo $_SESSION['akhir']['waktuskrg']; ?></b></h4></center>
										</div>
										<?php
											if(!isset($_SESSION['timeout'])){
												$_SESSION['timeout'] = time();
											};
												$akhir = $_SESSION['akhir']['waktos'];
												$exp = $_SESSION['timeout']+$akhir;
												//$_SESSION['jalan']=$_SESSION['timeout'] + time();
										 ?>
										 <?php
										 	if(time() > $exp){
												header("location:<?php echo $base_url ?>file_query/query_hapus_transaksi");
												unset($_SESSION['timeout']);
												//unset($_SESSION['akhir']);
											};
										  ?>
									</div>
							<?php	}
							}
						}
					} ?>

				</div>

				<?php
				  if (!empty($_SESSION['user'])) {
				    $id_user=$_SESSION['user'];
				    $query=("SELECT
				            tb_transaksi.id_transaksi,
				            tb_transaksi.status,
				            tb_transaksi.pembayaran,
				            tb_transaksi.tanggal_transaksi,
				            tb_transaksi.jumlah,
				            tb_transaksi.total,
				            tb_transaksi.status,
							tb_transaksi.foto AS foto_bukti,
							tb_transaksi.expired,
				            tb_produk.produk,
				            tb_produk.foto,
				            tb_produk.ukuran,
				            tb_produk.harga
				            FROM tb_transaksi,tb_produk,tb_user
				            WHERE tb_transaksi.id_user=tb_user.id_user
				            AND tb_transaksi.id_produk=tb_produk.id_produk
				            AND tb_user.id_user=$id_user
				            ORDER BY tb_transaksi.id_transaksi DESC
				            ");
				    $data=mysqli_query($con,$query);
				    while($hasil = mysqli_fetch_array($data)){
				    $status=$hasil['status'];
						$id_transaksi=$hasil['id_transaksi'];
				    $ongkir=20000;
						$foto_bukti=$hasil['foto_bukti'];
				?>
				<div class="col s12 white z-depth-1" style="padding:20px; margin-bottom:20px;">
					<div class="col s12 m4 l4">
						<div class="col s12" style="margin-bottom:20px;padding-left:0px;">
							<div class="col s1 green white-text" style="min-height:33%;">
							 <h5 class="white-text" style="transform:rotate(90deg);">&nbspF&nbspo&nbspt&nbspo&nbsp&nbsp&nbsp&nbsp&nbspP&nbspr&nbspo&nbspd&nbspu&nbspk</h5>
						 	</div>
							<div class="col s11" style="max-height:243px;max-width:243px;">
								<img class="responsive-img materialboxed"src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
							</div>
						</div>
						<hr>
						<div class="col s12"style="margin-top:10px;padding-left:0px;" >
							<div class="col s1 blue white-text" style="min-height:26%;">
								<h5 class="white-text" style="transform:rotate(90deg);">F&nbspo&nbspt&nbspo&nbsp&nbsp&nbsp&nbspB&nbspu&nbspk&nbspt&nbspi</h5>
							</div>
							<div class="col 11">
								<?php if ($hasil['foto_bukti']!=""){ ?>
									<img class="responsive-img materialboxed" style="width:175px;height:175px;" src="<?php echo $base_url ?>assets/images/bukti_pembayaran/<?php echo $hasil['foto_bukti'];?>">
								<?php }elseif($hasil['pembayaran']=="Cash On Delivery"){ ?>
									<img class="responsive-img materialboxed" style="width:160px;height:160px;" src="<?php echo $base_url ?>assets/images/bukti_pembayaran/<?php echo $hasil['foto_bukti']; ?>">
								<?php }else{ ?>
									<img class="responsive-img materialboxed" style="width:160px;height:160px;" src="<?php echo $base_url ?>assets/images/bukti_pembayaran/belum_dikonfirmasi.png">
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col s12 m8 l8">
						<div class="col s12" style="padding-left:10px;">
							<h5> Detail Transaksi </h5>
						</div>
						<hr>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Produk </h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['produk'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Ukuran</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['ukuran'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Jumlah</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['jumlah'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Harga</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text">Rp. <?php echo $hasil['harga'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Ongkir</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php if ($hasil['total']<100000){ ?>
									Rp. <?php echo $ongkir; ?>
								<?php }else{ ?>
									Rp. 0
								<?php } ?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Total</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text">Rp. <?php echo $hasil['total'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Tanggal Transaksi</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['tanggal_transaksi'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Pembayaran</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['pembayaran'];?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Status</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text">
								<?php if ($status==""){ ?>
									<?php if ($foto_bukti==""){ ?>
										Belum dikonfirmasi
									<?php }else {?>
										Sedang di Proses
									<?php } ?>
								<?php } else{?>
									<?php echo $hasil['status'];?>
								<?php } ?></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s6 m3 l3">
								<h6 class="black-text"><i class="material-icons left orange-text">label</i>Expired</h6>
							</div>
							<div class="col s1">
								<h6 class="black-text">:</h6>
							</div>
							<div class="col s5 m8 l8">
								<h6 class="black-text"><?php echo $hasil['expired'];?></h6>
							</div>
						</div>
						<hr>
						<div class="col s12 white-tipis">
							<div class="col s5 m8 l8">
								<h5>Verifikasi</h5>
							</div>
							<div class="col s7 m4 l4">
								<div class="col s12" style="padding-top:10px;">
							    <?php if($hasil['pembayaran']=="Cash On Delivery"){ ?>
										<?php if($status=="Produk telah di Terima"){ ?>
											<span class="btn-outline blue-outline waves-effect waves-light">Berhasil Transaksi</span>
										<?php }else{ ?>
							      <span class="btn-outline waves-effect waves-light">Siapkan Uang</span>
										<?php } ?>
									<?php }else{ ?>
							    <?php if($status=="Produk telah di Terima"){ ?>
										<span class="btn-outline blue-outline waves-effect waves-light">Berhasil Transaksi</span>
							    <?php }else{ ?>
							    <a href="<?php echo $base_url ?>post/konfirmasi?id_transaksi=<?php echo $hasil['id_transaksi']; ?>" class="btn fullbtn green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Verifikasi Pembayaran"><i class="material-icons">verified_user</i></a>
									<?php } } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } } ?>

			</div>
		</div>
	</div>

  <br>

	<?php include'../include/footer.php' ?>
