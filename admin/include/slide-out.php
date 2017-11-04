<!-- Slide-Out  -->
<ul id="slide-out" class="side-nav">
  <li>
    <div class="userView">
      <div class="background">
        <img src="<?php echo $base_url; ?>assets/images/backgrounds/1_blur.jpg">
      </div>
      <?php
        $query=("SELECT * FROM tb_admin");
        $data=mysqli_query($con,$query);
        while($hasil = mysqli_fetch_assoc($data)){
      ?>
      <a href="#!user"><img class="circle" src="<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto'];?>"></a>
      <a href="#!name"><span class="white-text name"><?php echo $hasil['username'];?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $hasil['email'];?></span></a>
      <?php } ?>
    </div>
  </li>
  <li><a href="<?php echo $base_url; ?>admin/show/dashboard" class="waves-effect waves-teal"><i class="material-icons">dashboard</i>Dasboard</a></li>
  <li><a href="<?php echo $base_url; ?>admin/post/posting" class="waves-effect waves-orange"><i class="material-icons">play_for_work</i>Posting Produk</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_postingan" class="waves-effect waves-teal"><i class="material-icons">tab</i>Postingan Produk</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_pemasukan" class="waves-effect waves-orange"><i class="material-icons">input</i>Pemasukan Produk</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_pemesanan" class="waves-effect waves-teal"><i class="material-icons">shop</i>Pemesanan Produk</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_user" class="waves-effect waves-orange"><i class="material-icons">person_pin</i>Data User</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_komentar" class="waves-effect waves-teal"><i class="material-icons">comment</i>Data Komentar</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_keluhan" class="waves-effect waves-orange"><i class="material-icons">assignment_late</i>Keluhan</a></li>
  <li><a href="<?php echo $base_url; ?>admin/show/show_omset" class="waves-effect waves-teal"><i class="material-icons">receipt</i>Omset Penjualan</a></li>
  <li><div class="divider"></div></li>
  <li><a href="<?php echo $base_url; ?>admin/file_query/query_logout?logout" class="Logout-link waves-effect waves-red"><i class="material-icons">power_settings_new</i>Logout</a></li>
</ul>
<!-- End Slide-Out -->
