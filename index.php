 <?php include'include/header_home.php' ?>
 <?php include'include/nav_home.php' ?>
 <?php include'include/icon_intro.php' ?>

  <br>

  <!-- Halaman Semua -->
  <div id="semua" class="col s12" style="min-height:350px;">
	<div class="cari-hasil"></div>
		<div id="sementara-hilang">
	    <div class="row">
	      <div class="container">
	        <?php
	            $query="SELECT * FROM tb_produk ORDER BY RAND()";
	            $data=mysqli_query($con,$query);
	            while($hasil = mysqli_fetch_assoc($data)){
	          ?>
	        <div class="col s12 m4 l3">
	          <div class="card medium hoverable">
	            <div class="card-image">
					<?php if ($hasil['foto']==null) { ?>
						<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
					<?php }else{ ?>
	              <img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
					<?php } ?>
				</div>
	            <div class="card-content">
	              <h6><?php echo $hasil['produk']; ?></h6>
	              <h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
	              <h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
	              <h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
	              <h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
						<h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i><?php echo$hasil['view']; ?> kali dilihat</span></h6>
	              <a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
	            </div>
	          </div>
	        </div>
	        <?php } ?>
	      </div>
	    </div>
	</div>
  </div>
  <!-- Akhir Halaman Semua -->

  <!-- Halaman Kecil -->
  <div id="kecil" class="col s12">
		<div class="cari-hasil"></div>
		<div id="sementara-hilang">
    	<div class="row">
      <div class="container">
				<?php
            $query="SELECT * FROM tb_produk WHERE ukuran='Kecil' ORDER BY RAND()";
            $data=mysqli_query($con,$query);
            while($hasil = mysqli_fetch_assoc($data)){
          ?>
        <div class="col s12 m4 l3">
          <div class="card medium ">
            <div class="card-image">
				<?php if ($hasil['foto']==null) { ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
				<?php }else{ ?>
				<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
				<?php } ?>
            </div>
            <div class="card-content">
              <h6><?php echo $hasil['produk']; ?></h6>
              <h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
              <h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
			  <h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i> <?php echo$hasil['view']; ?> kali dilihat</span></h6>
              <a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
	 </div>
  </div>
  <!-- Akhir Halaman Kecil -->

  <!-- Halaman Sedang -->
  <div id="sedang" class="col s12">
		<div class="cari-hasil"></div>
		<div id="sementara-hilang">
    	<div class="row">
      <div class="container">
				<?php
            $query="SELECT * FROM tb_produk WHERE ukuran='sedang' ORDER BY RAND()";
            $data=mysqli_query($con,$query);
            while($hasil = mysqli_fetch_assoc($data)){
          ?>
        <div class="col s12 m4 l3">
          <div class="card medium ">
            <div class="card-image">
				<?php if ($hasil['foto']==null) { ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
				<?php }else{ ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
				<?php } ?>
            </div>
            <div class="card-content">
              <h6><?php echo $hasil['produk']; ?></h6>
              <h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
              <h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
							<h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i> <?php echo$hasil['view']; ?> kali dilihat</span></h6>
              <a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
		</div>
  </div>
  <!-- Akhir Halaman Sedang -->

  <!-- Halaman Besar -->
  <div id="besar" class="col s12">
		<div class="cari-hasil"></div>
		<div id="sementara-hilang">
    	<div class="row">
      <div class="container">
			<?php
            $query="SELECT * FROM tb_produk WHERE ukuran='besar' ORDER BY RAND()";
            $data=mysqli_query($con,$query);
            while($hasil = mysqli_fetch_assoc($data)){
          	?>
        <div class="col s12 m4 l3">
          <div class="card medium ">
            <div class="card-image">
				<?php if ($hasil['foto']==null) { ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
				<?php }else{ ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
				<?php } ?>
            </div>
            <div class="card-content">
              <h6><?php echo $hasil['produk']; ?></h6>
              <h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
              <h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
			  <h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i> <?php echo$hasil['view']; ?> kali dilihat</span></h6>
              <a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
		</div>
  </div>
  <!-- Akhir Halaman Besar -->

  <!-- Halaman Jumbo -->
  <div id="jumbo" class="col s12">
		<div class="cari-hasil"></div>
		<div id="sementara-hilang">
    	<div class="row">
      <div class="container">
				<?php
            $query="SELECT * FROM tb_produk WHERE ukuran='jumbo' ORDER BY RAND()";
            $data=mysqli_query($con,$query);
            while($hasil = mysqli_fetch_assoc($data)){
          ?>
        <div class="col s12 m4 l3">
          <div class="card medium ">
            <div class="card-image">
				<?php if ($hasil['foto']==null) { ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
				<?php }else{ ?>
					<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
				<?php } ?>
            </div>
            <div class="card-content">
              <h6><?php echo $hasil['produk']; ?></h6>
              <h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
              <h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
              <h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
			  <h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i> <?php echo$hasil['view']; ?> kali dilihat</span></h6>
              <a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
	</div>
  </div>
  <!-- Akhir Halaman Jumbo -->

  <!-- Halaman Montong -->
  <div id="montong" class="col s12">
	<div class="cari-hasil"></div>
	<div id="sementara-hilang">
		<div class="row">
			<div class="container">
				<?php
					$query="SELECT * FROM tb_produk WHERE jenis='montong' ORDER BY RAND()";
					$data=mysqli_query($con,$query);
					while($hasil = mysqli_fetch_assoc($data)){
				?>
				<div class="col s12 m4 l3">
					<div class="card medium ">
						<div class="card-image">
							<?php if ($hasil['foto']==null) { ?>
								<img class="responsive-img" src="<?php echo $base_url ?>assets/images/not_found/no_image.png">
							<?php }else{ ?>
								<img class="responsive-img" src="<?php echo $base_url ?>assets/images/produk/<?php echo $hasil['foto'];?>">
							<?php } ?>
						</div>
						<div class="card-content">
							<h6><?php echo $hasil['produk']; ?></h6>
							<h6><span class="grey-text text-darken-2 name">Ukuran : <?php echo $hasil['ukuran'];?></span></h6>
							<h6><span class="grey-text text-darken-2 name">Jenis : <?php echo $hasil['jenis'];?></span></h6>
							<h6><span class="grey-text text-darken-2 name">Stok : <?php echo $hasil['stok'];?></span></h6>
							<h6><span class="red-text text-darken-2 name">Harga : <?php echo $hasil['harga'];?></span></h6>
							<h6><span class="blue-grey-text text-darken-2 name"><i class="material-icons left tiny">visibility</i> <?php echo$hasil['view']; ?> kali dilihat</span></h6>
							<a href="<?php echo $base_url ?>show/rincian_produk?id_produk=<?php echo $hasil['id_produk'];?>" class="btn fullbtn waves-effect waves-light red darken-1 ">Beli</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
  </div>
  <!-- Akhir Halaman Montong -->

	<?php include'include/footer.php'; ?>
