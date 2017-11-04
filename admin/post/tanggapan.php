<?php include'../include/header.php'; ?>
<?php include'../include/nav.php'; ?>
<?php include'../file_query/query_tanggapan.php'; ?>

<br><br><br>
<div class="conta" style="min-height:400px;">
  <div class="row white z-depth-1">
    <div class="col s12">
      <blockquote>
        <center><h3><i class="material-icons">forum</i> Tanggapi Keluhan</h3></center>
      </blockquote>
      <br>
    </div>
    <div class="col s12">
      <form class="" action="" method="post">
        <div class="row">
          <div class="input-field col s12">
            <textarea name="tanggapan" class="materialize-textarea" ></textarea>
            <label for="textarea"><i class="material-icons">comment </i>Tanggapi</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <button class="btn btn-hover waves-effect waves-light red darken-1 " type="submit" name="tanggapi">Tanggapan<i class="material-icons right">send</i></button>
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
