<?php include'../include/header.php'; ?>
<?php include'../file_query/query_edit_foto.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../config/base_url.php'; ?>

<br><br>

<!-- Edit Foto Profil -->
  <div class="container">
    <div class="row">
      <div class="col s12 white-tipis z-depth-1" style="padding:20px;">
        <blockquote>
          <h4 style="font-size:20pt;"><center><i class="material-icons">settings</i>Ubah Foto Profil</center></h4>
        </blockquote><br><br>
        <form class="" action="" method="post" enctype="multipart/form-data">
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
          <div class="row">
            <div class="col s12">
              <button class="btn update waves-effect waves-light green" type="submit" name="update" value="update">Simpan<i class="material-icons right">send</i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Akhir Edit Foto Profil -->

<br><br>

<?php include'../include/back_to_top.php' ?>
<?php include'../include/footer.php'; ?>
