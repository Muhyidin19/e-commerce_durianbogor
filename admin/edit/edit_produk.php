  <?php include'../include/header.php'; ?>
  <?php include'../include/nav.php'; ?>
  <?php include'../file_query/query_edit_postingan.php'; ?>

  <br><br>

  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white  row-modal radius z-depth-1">
        <div class="col s12">
          <div class="row"><br>
            <div class="col s1">
            </div>
            <div class="col s12 m10 l10">
              <blockquote>
                <h3 class="black-text center"><i class="material-icons">settings</i> Ubah Data Produk</h3>
              </blockquote>
            </div>
            <div class="col s1">
            </div>
          </div>
        </div>
        <div class="col m1 l1">
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="col s12 m4 black-text">
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="id_produk" class="validate" data-length="50" value="<?php echo $hasil['id_produk']; ?>">
                <label class="active" for="text"> Id_Produk</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="produk" class="validate" data-length="50" value="<?php echo $hasil['produk']; ?>">
                <label class="active" for="text"><i class="material-icons">polymer </i> Nama Produk</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="ukuran" >
                  <?php
                    $ukurana = array('Kecil','Sedang','Besar','Jumbo');
                    echo "<option value='$ukurant'>$ukurant</option>";
                    echo "<optgroup label='Pilih Ukuran Untuk Lokal'>";
                    foreach ($ukurana as $ukur) {
                      if ($ukur != $ukurant) {
                        echo "<option value='$ukur'>$ukur</option>";
                      }
                    }
                    echo "</optgroup>";
                   ?>
                   <?php
                     $ukurana = array('1 Kg - 1.5 Kg','1.5 Kg - 2 Kg','2 Kg - 2.5 Kg','2.5 Kg - 3 Kg','3 Kg - 3.5 Kg','3.5 Kg - 4 Kg','4 Kg - 4.5 Kg','4.5 Kg - 5 Kg','5 Kg - 5.5 Kg','5.5 Kg - 6 Kg','6 Kg - 6.5 Kg','6.5 Kg - 7  Kg' );
                     echo "<optgroup label='Pilih Ukuran Untuk Montong'>";
                     foreach ($ukurana as $ukur) {
                       if ($ukur != $ukurant) {
                         echo "<option value='$ukur'>$ukur</option>";
                       }
                     }
                     echo "</optgroup>";
                    ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12" >
                <input type="text" name="stok" class="validate" data-length="50" value="<?php echo "$stokt"; ?>">
                <label class="active" for="text"><i class="material-icons">settings_input_composite </i> Jumlah Stok</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="harga" class="validate" data-length="50" value="<?php echo "$hargat"; ?>">
                <label class="active" for="text"><i class="material-icons">high_quality </i> Harga</label>
              </div>
            </div>
          </div>
          <div class="col m1 l1">
          </div>
          <div class="col s12 m5 black-text">
            <div class="row">
              <div class="input-field col s12">
                <select name="jenis" >
                  <?php
                    $jenisa = array('Montong','Lokal');
                    echo "<option value='$jenist'>$jenist</option>";
                    foreach ($jenisa as $jenis) {
                      if ($jenis != $jenist) {
                        echo "<option value='$jenis'>$jenis</option>";
                      }
                    }
                   ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="asal" class="validate" data-length="50" value="<?php echo "$asalt"; ?>">
                <label class="active" for="text"><i class="material-icons">room </i>Asal</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="deskripsi" class="validate" data-length="100" value="<?php echo "$deskripsit"; ?>">
                <label class="active" for="text"><i class="material-icons">subtitles</i> Deskripsi Produk</label>
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
                <h6 >Opsional</h6>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <button class="btn update btn-hover waves-effect waves-light red darken-1 " type="submit" name="simpan" value="simpan">Update<i class="material-icons right">send</i></button>
              </div>
            </div>
          </div>
        </form>
        <div class="col m1 l1">
        </div>
      </div>
    </div>
  </div>

  <br><br>

  <?php include'../include/slide-out.php'; ?>
  <?php include'../include/icon_action.php'; ?>
  <?php include'../include/back_to_top.php'; ?>
  <?php include'../include/footer.php'; ?>
