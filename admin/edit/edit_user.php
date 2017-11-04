<?php include'../include/header.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../file_query/query_edit_user.php'; ?>
<?php include'../include/slide-out.php'; ?>

<br><br>

<!-- Edit Profil -->
  <div class="conta" style="min-height:400px;">
    <div class="row white z-depth-1">
      <div class="col s12">
        <blockquote>
          <h3><center><i class="material-icons">settings</i> Ubah Data User</center></h3>
        </blockquote>
        <br>
        <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="col s12 m6 l6">
            <div class="row">
              <div class="input-field col s12">
                <input type"text" name="id_user" class="materialize-textarea" data-length="100" value="<?php echo $id_useru; ?>">
                <label class="active"  for="text"><i class="material-icons">info_outline</i> Id User</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="name" class="validate" data-length="50" value="<?php echo $nameu; ?>">
                <label class="active"  for="text"><i class="material-icons">polymer </i> Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" name="email" type="email" class="validate" data-length="50" value="<?php echo $emailu; ?>">
                <label class="active"  for="email" data-error="Harap Masukan Alamat E-mail yang benar" data-success="E-mail Benar"><i class="material-icons">person_pin </i> Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type"text" name="alamat" class="materialize-textarea" data-length="100" value="<?php echo $alamatu; ?>">
                <label class="active"  for="text"><i class="material-icons">room </i> Alamat</label>
              </div>
            </div>
          </div>
          <div class="col m1 l1">
          </div>
          <div class="col s12 m5 black-text">
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="telepon" class="validate" data-length="13" value="<?php echo $teleponu; ?>">
                <label class="active"  for="telepon"><i class="material-icons">call </i> Telepon</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="jenis_kelamin">
                  <?php
                        $jenisa = array('Laki - Laki','Perempuan');
                        echo "<option value='$jenis_kelaminu'>$jenis_kelaminu</option>";
                        foreach ($jenisa as $jenis) {
                          if ($jenis != $jenis_kelaminu) {
                            echo "<option value='$jenis'>$jenis</option>";
                          }
                        }
                   ?>
                </select>
              </div>
            </div>
            <div class="col s12">
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
            </div>
            <div class="row">
              <div class="col s12">
                <button class="btn yes-red update waves-effect waves-light" type="submit" name="update" value="update">Simpan<i class="material-icons right">send</i></button><br><br>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Edit Profil -->

<br><br>

<?php include'../include/back_to_top.php'; ?>
<?php include'../include/footer.php'; ?>
