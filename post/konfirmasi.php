<?php include'../include/header.php' ?>
<?php include'../file_query/query_konfirmasi.php'; ?>
<?php include'../include/nav.php' ?>
<?php include'../config/base_url.php' ?>

<br><br>

<!-- Konfirmasi Pemesanan -->
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
                    <h4 class="black-text" style="font-size:20pt;"><center><i class="material-icons">markunread_mailbox</i>Konfirmasi Pemesanan</center></h4>
                  </blockquote>
                </div>
              </div>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="file-field input-field">
                  <div class="btn yes-yellow">
                    <span>Foto</span>
                    <input type="file" name="foto">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Foto">
                  </div>
                  <h6 >Foto (Struk) Transfer Sebagai Bukti Pembayaran</h6>
                </div>
                <div class="col s12">
                  <button type="submit" name="konfirmasi" class="btn waves-effect waves-light right">Kirim<i class="material-icons right">send</i></button>
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
<!-- Akhir Konfirmasi Pemesanan -->

<br>
<br>

<?php include'../include/back_to_top.php' ?>
<?php include'../include/footer.php' ?>
