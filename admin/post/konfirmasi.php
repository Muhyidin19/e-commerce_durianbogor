<?php include'../include/header.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../file_query/query_konfirmasi.php'; ?>

<br><br><br>
<div class="conta" style="min-height:400px;">
  <div class="row white z-depth-1">
    <div class="col s12">
      <blockquote>
        <center><h3><i class="material-icons">description</i> Konfirmasi Pemesanan</h3></center>
      </blockquote>
      <br>
    </div>
    <div class="col s12">
      <form class="" action="" method="post">
        <div class="row">
          <div class="input-field col s12">
          <input type="text" name="id_transaksi" value="<?php echo $id_transaksi ?>">
          <label class="active" for="text"><i class="material-icons">info</i></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select name="status">
              <option value='Sedang di Proses'>Sedang di Proses</option>
              <option value='Produk Sedang di Kirim'>Produk Sedang di Kirim</option>
              <option value='Produk telah di Terima'>Produk Telah di Terima</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <button class="btn btn-hover waves-effect waves-light red darken-1 " type="submit" name="konfirmasi">Konfirmasi<i class="material-icons right">send</i></button>
          </div>
        </div><br>
      </div>
      </form>
    </div>
  </div>
</div>

<br><br>

<?php include'../include/slide-out.php'; ?>
<?php include'../include/footer.php'; ?>
