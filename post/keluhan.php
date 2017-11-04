<?php include'../include/header.php' ?>
<?php include'../include/nav.php' ?>
<?php include'../config/base_url.php' ?>

<br><br>

<!-- Keluhan -->
<div class="container">
  <div class="col s12">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="row">
            </div>
            <?php if (!empty($_SESSION['user'])) { ?>
            <div class="col s12 m12">
              <div class="row">
                <div class="col s12">
                  <blockquote>
                    <h4 class="black-text" style="font-size:20pt;"><center><i class="material-icons">markunread_mailbox</i>Kolom Keluhan</center></h4>
                  </blockquote>
                </div>
              </div>
              <form action="<?php echo $base_url ?>file_query/query_keluhan" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="input-field col s12">
                    <select name="jenis_keluhan">
                      <option value="" disabled selected>Pilih Jenis Keluhan</option>
                      <option value="Produk Belum Terkirim">Produk Belum Terkirim</option>
                      <option value="Kerusakan Pada Produk">Kerusakan Pada Produk</option>
                      <option value="Lamanya Pengiriman Produk">Lamanya Pengiriman Produk</option>
        							<option value="Sistem Bermasalah">Sistem Bermasalah</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="keluhan" class="materialize-textarea" ></textarea>
                    <label for="textarea"><i class="material-icons">comment </i> Keluhan</label>
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
                  <h6 >Foto Kerusakan</h6>
                </div>
                <div class="col s12">
                  <button type="submit" class="btn popupkeluhan waves-effect waves-light right" name="btn-keluhan">Keluhan<i class="material-icons right">send</i></button>
                </div>
              </form>
            </div>
            <?php } else { ?>
              <script type="text/javascript">
                swal({
                  text: "Anda Belum Login, Silahkan Login Terlebih Dahulu Agar Bisa Mengirim Keluhan",
                  title: "<b>Login Terlebih Dahulu</b>",
                  confirmButtonText: "Login",
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
</div>
<!-- End Keluhan -->

<br>
<br>

<?php include'../include/back_to_top.php' ?>
<?php include'../include/footer.php' ?>
