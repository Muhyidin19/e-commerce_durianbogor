	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/icon_action.php'; ?>
	<br>

  <!--  Posting -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white radius z-depth-1">
        <div class="col s12">
          <div class="row"><br>
						<div class="col s1">
						</div>
						<div class="col s12 m10 l10">
							<blockquote>
								<h3 class="black-text center"><i class="material-icons">play_for_work</i>Posting Produk</h3>
							</blockquote>
						</div>
						<div class="col s1">
						</div>
          </div>
        </div>
        <div class="col m1 l1">
        </div>
        <form action="<?php echo $base_url; ?>admin/file_query/query_posting" method="POST" enctype="multipart/form-data">
          <div class="col s12 m4 black-text">
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="produk" class="validate" data-length="50">
                <label for="text"><i class="material-icons">polymer </i> Nama Produk</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="ukuran">
                  <optgroup label="Pilih Ukuran Untuk Lokal">
    								<option value="Kecil">Kecil</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Besar">Besar</option>
    								<option value="Jumbo">Jumbo</option>
									</optgroup>
									<optgroup label="Pilih Ukuran Untuk Montong">
										<option value="" disabled selected>Pilih Ukuran</option>
										<option value="1 Kg - 1.5 Kg">1 Kg - 1.5 Kg</option>
    								<option value="1.5 Kg - 2 Kg">1.5 Kg - 2 Kg</option>
										<option value="2 Kg - 2.5 Kg">2 Kg - 2.5 Kg</option>
                    <option value="2.5 - Kg 3 Kg">2.5 Kg - 3 Kg</option>
										<option value="3 Kg - 3.5 Kg">3 Kg - 3.5 Kg</option>
                    <option value="3.5 Kg - 4 Kg">3.5 Kg - 4 Kg</option>
										<option value="4 Kg - 4.5 Kg">4 Kg - 4.5 Kg</option>
										<option value="4.5 Kg - 5 Kg">4.5 Kg - 5 Kg</option>
										<option value="5 Kg - 5.5 Kg">5 Kg - 5.5 Kg</option>
										<option value="5.5 Kg - 6 Kg">5.5 Kg - 6 Kg</option>
										<option value="6 Kg - 6.5 Kg">6 Kg - 6.5 Kg</option>
    								<option value="6.5 Kg - 7  Kg">6.5 Kg - 7 Kg</option>
									</optgroup>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="stok" class="validate" data-length="50">
                <label for="text"><i class="material-icons">settings_input_composite </i> Jumlah Stok</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="harga" class="validate" data-length="50">
                <label for="text"><i class="material-icons">high_quality </i> Harga</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" name="asal" class="validate" data-length="50">
                <label for="text"><i class="material-icons">room </i>Asal</label>
              </div>
            </div>
          </div>
          <div class="col m1 l1">
          </div>
          <div class="col s12 m5 black-text">
            <div class="row">
            <div class="input-field col s12">
              <select name="jenis">
                <option value="" disabled selected>Pilih Jenis</option>
                  <option value="Montong">Durian Montong</option>
                  <option value="Lokal">Durian Lokal</option>
              </select>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="date" class="datepicker" name="tanggal_post">
                <label for="date"><i class="material-icons">loyalty </i> Tanggal Posting</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" name="deskripsi" class="materialize-textarea" data-length="100"></textarea>
                <label for="textarea1"><i class="material-icons">subtitles</i> Deskripsi Produk</label>
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
            <br>
            <div class="row">
              <div class="col s12">
                <button class="btn btn-hover waves-effect waves-light red darken-1 " type="submit" name="simpan" value="simpan">Posting<i class="material-icons right">send</i></button>
              </div>
            </div><br>
          </div>
        </form>
        <div class="col m1 l1">
        </div>
      </div>
    </div>
  </div>
  <!-- End Posting -->

	<br><br>

	<?php include'../include/footer.php'; ?>
