	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/back_to_top.php' ?>
  <?php include'../config/base_url.php' ?>

  <br><br>


  <!-- Profil User -->
  <div class="col s12">
    <div class="container">
      <div class="card-panel white-tipis">
        <div class="row">
					<?php
						if(!empty($_SESSION['user'])) {
						$id_user=$_SESSION['user'];

						$query= "SELECT * FROM tb_user WHERE id_user=$id_user";
						$hasil= mysqli_query($con,$query);
						while($iuser= mysqli_fetch_assoc($hasil)):;
					 ?>
          <div class="col s12 m4 l4">
						<div class="col s12" style="margin-top:80px; width:300px; height:300px;">
							<?php if ($iuser['foto']==null) { ?>
								<center><img class="materialboxed responsive-img circle"  src="<?php echo $base_url ?>assets/images/not_found/no_image.png"></center>
							<?php } else { ?>
              	<center><img class="materialboxed responsive-img circle" src="<?php echo $base_url ?>assets/images/user/<?php echo $iuser['foto']; ?>"></center>
							<?php } ?>
						</div>
						<div class="col s12" style="margin-top:30px;">
							<a class="green btn fullbtn waves-effect waves-light" href="<?php echo $base_url ?>edit/edit_foto_profil?id_user=<?php echo $iuser['id_user']; ?>" >Ubah Foto Profil<i class="material-icons right">perm_media</i></a>
						</div>
						
					</div>
          <div class="col s12 m8 l8" style="margin-top:10px;">
            <table>
              <thead>
                <tr>
                  <th colspan=3><blockquote><h4 style="font-size:20pt;">Profil User/Cutomer</h4></blockquote></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?php echo $iuser['name']; ?></td>
                </tr>
                <tr>
                  <td>Alamat E-mail</td>
                  <td>:</td>
                  <td><?php echo $iuser['email']; ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td><?php echo $iuser['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo $iuser['alamat']; ?></td>
                </tr>
                <tr>
                  <td>Telepon</td>
                  <td>:</td>
                  <td><?php echo $iuser['telepon']; ?></td>
                </tr>
              </tbody>
            </table><br>
            <div class="row">
              <div class="col s12">
                <a class="btn fullbtn waves-effect waves-light" href="<?php echo $base_url ?>edit/edit_profil?id_user=<?php echo $iuser['id_user']; ?>" >Ubah Profil<i class="material-icons right">recent_actors</i></a>
              </div>
            </div>
          </div>
        </div>
				<?php endwhile; ?>
				<?php } else { ?>
					<script type="text/javascript">
						swal({
							text: "Anda Belum Login, Silahkan Login Terlebih Dahulu Agar Bisa Melihat Profil Anda",
							title: "<b>Login Terlebih Dahulu</b>",
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
  </div>
  <!-- End Profil User -->

  <br><br>

	<?php include'../include/footer.php'; ?>
