  <?php include'../include/header.php' ?>
  <?php include'../include/nav.php' ?>
  <?php include'../config/base_url.php' ?>

  <br><br>

	<!-- Rincian Produk -->
	<?php
   if (isset($_GET['id_produk'])) {
     $id_produk = $_GET['id_produk'];
   }
    $query = mysqli_query($con,"SELECT * FROM tb_produk WHERE id_produk=$id_produk ");
    $hasil = mysqli_fetch_array($query);

		//Tambah Viewer//
		$view = $hasil['view']+1;
	 	$sql = "UPDATE tb_produk SET view = $view WHERE id_produk ='$id_produk'";
	 	mysqli_query($con,$sql);
	 	//Akhir Tambah Viewer//

   ?>

  <div class="container">
    <div class="col s12">
      <div class="row">
        <div class="col s12">
          <div class="parallax-container z-depth-1">
						<?php if ($hasil['foto']==null) { ?>
							<div class="parallax z-depth-1"><img class="" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
						<?php }else{ ?>
            	<div class="parallax z-depth-1"><img class="" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
						<?php } ?>
						</div>
          </div>
        </div>
				<div class="col s12" style="margin-top:20px;">
					<div class="row">
						<div class="col s4">
							<?php if ($hasil['foto']==null) { ?>
								<img class="responsive-img materialboxed z-depth-1" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
							<?php }else{ ?>
								<img class="responsive-img materialboxed z-depth-1" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
							<?php } ?>
						</div>
						<div class="col s4">
							<center>
							<?php if ($hasil['foto']==null) { ?>
								<img class="responsive-img materialboxed z-depth-1" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
							<?php }else{ ?>
								<img class="responsive-img materialboxed z-depth-1" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
							<?php } ?>
							</center>
						</div>
						<div class="col s4">
							<?php if ($hasil['foto']==null) { ?>
								<img class="responsive-img materialboxed z-depth-1 right" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
							<?php }else{ ?>
								<img class="responsive-img materialboxed z-depth-1 right" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
							<?php } ?>
						</div>
					</div>
				</div>
    	</div>
		</div>
  </div>
  <div class="container">
    <div class="col s12 white z-depth-1" style="padding:30px;margin-bottom:20px;margin-top:0px;">
      <div class="row">
	      <div class="col s12 m6 l6">
	        <h5 class="black-text">Rincian Produk</h5><hr>
	        <div class"row">
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Nama</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['produk']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Ukuran</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['ukuran']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Jenis</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['jenis']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Stok</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['stok']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Daerah Asal</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['asal']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Tanggal Post</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['tanggal_post']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Harga</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name">Rp. <?php echo $hasil['harga']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;" style="margin-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Deskripsi</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['deskripsi']; ?></span></h6>
							</div>
						</div>
						<div class="col s12" style="padding-left:0px;">
							<div class="col s4">
								<h6><span class="grey-text text-darken-2 name"><i class="material-icons left">label</i>Dilihat</span></h6>
							</div>
							<div class="col s1">
								<h6><span class="grey-text text-darken-2 name">:</span></h6>
							</div>
							<div class="col s7">
								<h6><span class="grey-text text-darken-2 name"><?php echo $hasil['view']; ?> Kali</span></h6>
							</div>
						</div>
	        </div>
	      </div>
	      <div class="col s12 m1">
	      </div>
	      <div class="col s12 m5 l5">
	        <div class="row">
						<div class="col s12">
							<h5 class="black-text">Pilih Jumlah Produk</h5><br><br>
						</div>
						<div class="col s12 m12 l12">
							<form class="" action="<?php echo $base_url ?>file_query/query_cart?action=add&id_produk=<?php echo $hasil['id_produk']; ?>" method="post">
								<select name="jumlah_produk" >
									<?php
										$no=1;
										while ($no <= $hasil['stok']) {
									 ?>
										<option value="<?php echo $no; ?>"><?php echo $no; ?></option>
										<?php
										$no=$no+1;	}
										?>
								</select>
							</div>
		          <div class="col s12 m12 l12">
		            <button type="submit" class="btn waves-effect waves-light red darken-1 fullbtn" name="jumlah">Beli Yuk</button>
		          </div>
						</form>
	        </div>
	      </div>
	    </div>
    </div>
  </div>
	<!-- End Rincian Produk -->

	<?php
		//------------------------------Komentar-----------------------------//
		$sqlKomentar = "SELECT tb_komentar.komentar, tb_komentar.waktu, tb_user.name, tb_user.foto FROM tb_komentar, tb_user WHERE tb_komentar.id_user = tb_user.id_user AND tb_komentar.id_produk = $id_produk ";
	 	$dataKomentar = mysqli_query($con,$sqlKomentar);
	 	//----------------------------End-Komentar---------------------------//
	?>

	<!-- Comment -->
	<div class="container">
	  <div class="col s12 white z-depth-1" style="padding:20px;">
	    <div class="row">
        <div class="col s12 m6">
					<div class="col s12">
						<h5 class="black-text">Ulasan Produk</h5>
					</div>
          <ul class="collection">
            <?php while ( $hKomentar = mysqli_fetch_assoc($dataKomentar)) { ?>
              <li class="collection-item avatar white black-text">
                <img src="<?php echo $base_url ?>assets/images/user/<?php echo $hKomentar['foto']; ?>" alt="" class="circle"> <p style="float:right;"><?php echo $hKomentar['waktu']; ?></p>
                <span class="title"><?php echo $hKomentar['name']; ?></span>
                <p><?php echo $hKomentar['komentar']; ?></p>
              </li>
              <?php } ?>
							<div id="result"></div>
            </ul>
        </div>
        <div class="col s12 m1">
        </div>
        <?php if (!empty($_SESSION['user'])) { ?>
        <div class="col s12 m5">
          <div class="row">
            <div class="col s12">
              <h5 class="black-text">Kolom Komentar</h5>
            </div>
          </div>
          <form method="post" class="komentar">
            <div class="row">
              <input type="hidden" id="id_produk" value="<?php echo $id_produk ?>">
              <div class="input-field col s12">
                <textarea id="komenField" id="textarea" class="materialize-textarea" ></textarea>
                <label for="textarea"><i class="material-icons">comment </i> Komentar</label>
              </div>
              <div class="col s12">
                <input type="button" value="Komentar" id="tombolKomen" class="btn fullbtn waves-effect waves-light" style="padding-top:8;">
              </div>
            </div>
          </form>
        </div>
        <?php } ?>
      </div>
	  </div>
	</div>
	<!-- End Comment -->

  <br>
  <br>

	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/footer.php' ?>
