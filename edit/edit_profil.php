<?php include'../include/header.php'; ?>
<?php include'../file_query/query_edit_profil.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../config/base_url.php'; ?>

<br><br>

<!-- Edit Profil -->
  <div class="container">
    <div class="row">
      <div class="col s12 white-tipis z-depth-1">
        <blockquote>
          <h4 style="font-size:20pt;"><center><i class="material-icons">settings</i> Ubah Profil</center></h4>
        </blockquote><br><br>
        <form class="" action="" method="post">
          <div class="col s12 m6 l6">
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
            <div class="row">
              <div class="col s12">
                <button class="btn update waves-effect waves-light green" type="submit" name="update" value="update">Simpan<i class="material-icons right">send</i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Akhir Edit Profil -->

<br><br>

<?php include'../include/back_to_top.php' ?>
<?php include'../include/footer.php'; ?>
