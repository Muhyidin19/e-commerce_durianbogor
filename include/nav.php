<?php include'../config/base_url.php' ?>
<!-- Menu Nav -->
<nav class="nav-extended">
  <div class="nav-wrapper">
    <div class="conta">
      <a href="<?php echo $base_url ?>index.php" class="brand-logo"><img class="responsive-img" src="<?php echo $base_url ?>assets/images/logo/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="large material-icons">reorder</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down navright">

        <li><a class="waves-effect waves-light" href="<?php echo $base_url ?>index.php">Home</a></li>

        <?php
              if (!empty($_SESSION['user'])) {
                $id_user=$_SESSION['user'];
                $sql=("SELECT COUNT(*) from tb_cart WHERE tb_cart.id_user=$id_user");
                $query=mysqli_query($con,$sql);
                $row=mysqli_fetch_row($query);
                mysqli_free_result($query);
            }
        ?>

        <li><a class="waves-effect waves-light" href="<?php echo $base_url ?>show/troli.php">
          <?php if (empty($_SESSION['user'])) {
            echo "0"; }else{
            echo $row[0];}?>
          <img class="iconmenu" src="<?php echo $base_url ?>assets/images/icon/troli_icon.png"></a>
        </li>

        <?php
        if (empty($_SESSION['user'])) {
        ?>
        <li><a href="<?php echo $base_url ?>login_register/login.php" class="waves-effect waves-light btn-flat">Login</a></li>
        <?php
        }else{
        ?>

        <?php
          if (!empty($_SESSION['user'])) {
            $id_user=$_SESSION['user'];
            $sql=mysqli_query($con,"SELECT * from tb_user WHERE id_user=$id_user");
            while($hasil=mysqli_fetch_assoc($sql)){
         ?>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?php echo $hasil['name'];?><i class="material-icons right">arrow_drop_down</i></a></li>
        <?php } } ?>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="<?php echo $base_url ?>show/profil.php"><i class="material-icons left">perm_identity</i>Profil</a></li>
          <?php
              $sql=mysqli_query($con,"SELECT COUNT(*) FROM tb_transaksi WHERE id_user=$id_user");
              $row=mysqli_fetch_row($sql);
           ?>
          <li><a href="<?php echo $base_url ?>show/pembelian.php"><i class="material-icons left">shopping_basket</i>Pembelian &nbsp<span class="a-merah"><b><?php echo $row[0]; ?></b></span></a></li>
          <li><a href="<?php echo $base_url ?>show/tanggapan.php"><i class="material-icons left">question_answer</i>Tanggapan &nbsp</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo $base_url ?>file_query/query_logout.php?logout" class="waves-effect waves-light Logout-link"><i class="material-icons left">settings_power</i>Logout</a></li>
        </ul>
        <?php } ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>index.php">Home</a></li>
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>show/troli.php"><img class="iconmenu" src="<?php echo $base_url ?>assets/images/icon/troli_icon.png"><?php echo $row[0];?></a></li>
        <?php
        if (!empty($_SESSION['user'])) {
        ?>
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>show/profil.php"><i class="material-icons right white-text">perm_identity</i>Profil</a></li>
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>show/pembelian.php"><i class="material-icons right white-text">shopping_basket</i>Pembelian</a></li>
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>show/tanggapan.php"><i class="material-icons right white-text">question_answer</i>Tanggapan</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect waves-light white-text Logout-link" href="<?php echo $base_url ?>query_logout.php?logout"><i class="material-icons right white-text">settings_power</i>Keluar</a></li>
        <?php
        }else{
        ?>
        <li><a class="waves-effect waves-light white-text" href="<?php echo $base_url ?>login_register/login.php" class="waves-effect waves-light btn-flat">Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<!-- End Nav -->
