<?php include'../include/header.php' ?>
<?php include'../include/nav.php' ?>

<br><br>

<div class="conta">
  <div class="col s12 white z-depth-1" style="padding:20px;min-height:450px;">
    <div class="row">
      <div class="col s12 m6">
        <div class="col s12">
          <h5 class="black-text">Keluhan</h5>
        </div>
        <ul class="collection">
          <?php
              $id_keluhan=$_GET['id_keluhan'];
              $query="SELECT 
                      tb_keluhan.id_keluhan,
                      tb_keluhan.keluhan,
                      tb_keluhan.waktu,
                      tb_user.name,
                      tb_user.foto 
                      FROM 
                      tb_keluhan,
                      tb_user,
                      tb_tanggapan
                      WHERE 
                      tb_keluhan.id_user=tb_user.id_user
                      AND 
                      tb_tanggapan.id_keluhan=tb_keluhan.id_keluhan
                      AND
                      tb_keluhan.id_keluhan=$id_keluhan
                      ";
              $sql=mysqli_query($con,$query);
              while($hasil=mysqli_fetch_assoc($sql)){ ?>
          <li class="collection-item avatar white black-text">
            <div class="col s12">
              <p style="float:right;"><?php echo $hasil['waktu']; ?></p>
              <img src="<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto'];?>" alt="" class="circle">
              <span class="title"><?php echo $hasil['name']; ?></span>
              <p><?php echo $hasil['keluhan']; ?></p>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
      <div class="col s12 m6">
        <div class="col s12">
          <h5 class="black-text">Tanggapan</h5>
        </div>
        <ul class="collection">
          <?php
          if (isset($_SESSION['user'])) {
            $id_user=$_SESSION['user'];
            $id_keluhan=$_GET['id_keluhan'];
            $query="SELECT 
                    tb_tanggapan.id_tanggapan,
                    tb_tanggapan.tanggapan,
                    tb_tanggapan.waktu,
                    tb_keluhan.id_keluhan,
                    tb_admin.username,
                    tb_admin.foto 
                    FROM 
                    tb_tanggapan,
                    tb_keluhan,
                    tb_admin 
                    WHERE 
                    tb_tanggapan.id_keluhan=tb_keluhan.id_keluhan 
                    AND 
                    tb_keluhan.id_user=$id_user
                    AND
                    tb_keluhan.id_keluhan=$id_keluhan
                    ";
            $sql=mysqli_query($con,$query);
            while($hasil=mysqli_fetch_assoc($sql)){ ?>

          <li class="collection-item avatar white black-text">
            <div class="col s12">
              <div class="col s10">
                <img src="<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto']; ?>" alt="" class="circle"> <p style="float:right;"><?php echo $hasil['waktu']; ?></p>
                <span class="title"><?php echo $hasil['username']; ?></span>
                <p><?php echo $hasil['tanggapan']; ?></p>
              </div>
              <div class="col s2">
                <div class="col s2" style="padding-top:30px;">
                  <a href="../file_query/query_hapus_tanggapan.php?id_tanggapan=<?php echo $hasil['id_tanggapan']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a>
                </div>
              </div>
            </div>
          </li>
          <?php } } ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<br><br>

<?php include'../include/slide-out.php' ?>
<?php include'../include/back_to_top.php' ?>
<?php include'../include/footer.php' ?>
