  <?php include'../include/header.php'; ?>
  <?php include'../include/nav.php'; ?>
  <?php include'../file_query/query_edit_stok.php'; ?>
  <?php include'../include/slide-out.php'; ?>

  <br><br><br>
  <div class="conta" style="min-height:400px;">
    <div class="row white z-depth-1">
      <div class="col s12">
        <div class="col s12">
          <blockquote>
            <center><h3><i class="material-icons">library_add</i> Ubah Stok</h3></center>
          </blockquote>
          <br>
        </div>
      </div>
      <div class="col s12">
        <form class="" action="" method="post">
          <div class="row">
            <div class="input-field col s12">
            <input type="text" name="id_produk" value="<?php echo $id_produkt ?>">
            <label class="active" for="text"><i class="material-icons">info</i></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
            <input type="text" name="stok" value="<?php echo $stokt ?>">
            <label class="active" for="text"><i class="material-icons">assessment</i></label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <button class="btn btn-hover update waves-effect waves-light red darken-1 " type="submit" name="updatestok">Update Stok<i class="material-icons right">send</i></button>
            </div>
          </div><br>
        </form>
      </div>
    </div>
  </div>

  <br><br>

  <?php include'../include/footer.php'; ?>
