<?php include'../include/header.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../include/slide-out.php'; ?>
<?php include'../include/icon_action.php'; ?>
<?php include'../include/komentar.php' ?>

<?php
	if (!empty($_SESSION['user'])) {
		if ($_SESSION['pesan']=='sukses'){
		$_SESSION['pesan']='';
		$id_user=$_SESSION['user'];
		$sql=mysqli_query($con,"SELECT * from tb_user WHERE id_user=$id_user");
		while($hasil=mysqli_fetch_assoc($sql)){
 ?>
 <script type="text/javascript">
	 swal({
		 text: "<img src='<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto'] ?>' width='100px' heigh='100px' class='circle'>",
		 title: "Selamat Datang <b><?php echo $hasil['name']; ?></b>",
		 html:true
	 });
 </script>
<?php } } } ?>

	<br><br><br>

  <!-- Content -->
  <div class="col s12">
    <div class="row row_no">
      <!-- Card Produk -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
            <div class="card-panel teal">
							<?php $sql=("SELECT COUNT(*) FROM tb_produk");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="white-text"><?php echo $row[0];?> Postingan Produk</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-teal fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_postingan"><i class="material-icons right">visibility </i> Lihat</a>
            </div>
          </div>
        </div>
      </div>
			<!-- End Card Produk -->

			<!-- Card Transaksi -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
            <div class="card-panel red">
							<?php $sql=("SELECT COUNT(*) FROM tb_transaksi");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="white-text"><?php echo $row[0];?> Pemesanan</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-red fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_pemesanan"><i class="material-icons right">visibility </i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
			<!-- End Card Transaksi -->

			<!-- Card User -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
            <div class="card-panel orange">
							<?php $sql=("SELECT COUNT(*) FROM tb_user");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="white-text"><?php echo $row[0];?> User</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-orange fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_user"><i class="material-icons right">visibility </i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
			<!-- End Card User -->

			<!-- Card Komentar -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
            <div class="card-panel red">
							<?php $sql=("SELECT COUNT(*) FROM tb_komentar");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="white-text"><?php echo $row[0]; ?> Komentar</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-red fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_komentar"><i class="material-icons right">visibility </i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
			<!-- End Card Komentar -->

			<!-- Card Keluhan -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
            <div class="card-panel orange">
							<?php $sql=("SELECT COUNT(*) FROM tb_keluhan");
										$query=mysqli_query($con,$sql);
										$row=mysqli_fetch_row($query);

							?>
              <h4 class="white-text"><?php echo $row[0]; ?> Keluhan</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-orange fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_keluhan"><i class="material-icons right">visibility </i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
			<!-- End Card Keluhan -->

			<!-- Card Pemasukan -->
      <div class="col s12 m6 l4">
        <div class="row">
          <div class="col s12">
						<?php $sql=("SELECT COUNT(*) FROM tb_produk");
									$query=mysqli_query($con,$sql);
									$row=mysqli_fetch_row($query);
									mysqli_free_result($query);
						?>
            <div class="card-panel teal">
              <h4 class="white-text"><?php echo $row[0]; ?> Pemasukan</h4>
              <div class="divider"></div><br>
              <a class="btn-flat btn-flat-teal fullbtn waves-effect waves-light white" href="<?php echo $base_url; ?>admin/show/show_pemasukan"><i class="material-icons right">visibility </i>Lihat</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card Pemasukan -->
    </div>
  </div>
  <!-- End Contents -->

	<br><br><br>

  <?php include'../include/footer.php'; ?>
