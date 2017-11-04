  <?php include'../include/header.php' ?>
  <?php include'../include/nav.php' ?>
  <?php include'../file_query/query_register.php' ?>
  <?php include'../config/base_url.php' ?>

  <br>

  <!-- Form Register -->
  <div class="col s12">
    <div class="container">
      <div class="row white-tipis z-depth-1">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          <div class="col s12">
          <blockquote>
            <h4><center><i class="material-icons">contacts</i> Daftar Akun</center></h4>
          </blockquote>
          <br><br>
            <div class="col s12 m6 l6">
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="name" class="validate" data-length="50" >
                  <label for="text"><i class="material-icons">polymer </i> Nama</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate" data-length="50">
                  <label for="email" data-error="Harap Masukan Alamat E-mail yang benar" data-success="E-mail Benar"><i class="material-icons">person_pin </i> Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="password" name="password" class="validate" min-length="8">
                  <label for="password"><i class="material-icons">lock </i> Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="telepon" class="validate" data-length="13">
                  <label for="telepon"><i class="material-icons">call </i> Telepon</label>
                </div>
              </div>
            </div>
            <div class="col s1"></div>
            <div class="col s12 m6 l6">
              <div class="row">
                <div class="input-field col s12">
                  <select name="jenis_kelamin">
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" name="alamat" class="materialize-textarea" data-length="100"></textarea>
                  <label for="textarea1"><i class="material-icons">room </i> Alamat</label>
                </div>
              </div>
              <div class="file-field input-field">
                <div class="btn yes-yellow">
                  <span>Foto</span>
                  <input type="file" name="foto">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Foto">
                </div>
                <h6 >*Pastikan Anda Mengupload Foto</h6>
              </div>
              <br>
              <div class="row">
                <div class="col s12">
                  <button class="btn fullbtn waves-effect waves-light red darken-1 " type="submit" name="register" value="register">Daftar<i class="material-icons right">send</i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Form Register  -->
  <br>

  <?php include'../include/back_to_top.php' ?>
	<?php include'../include/footer.php' ?>
