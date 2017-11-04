<!-- Nav -->
  <div class="wrapper-me yes-hijau">
    <div class="col s12">
      <div class="row">
        <div class="col s6 row_no_pad">
          <a href="#" data-activates="slide-out" class="button-collapse left" ><i class="btn-active material-icons white-text">reorder</i></a>
        </div>
        <div class="col s6 row_no_pad">
          <a href="<?php echo $base_url; ?>admin/show/dashboard" class="brand-logo right"><img class="responsive-img" src="<?php echo $base_url; ?>assets/images/logo/logo.png"></a>
        </div>
      </div>
    </div>
  </div>
<!-- End Nav -->
<?php
  session_start();

  include'../../config/koneksi.php';

  if( !isset($_SESSION['user']) ) {
    header("Location: <?php echo $base_url; ?>index");
    exit;
  }
  $res=mysqli_query($con,"SELECT * FROM tb_admin WHERE id_admin=".$_SESSION['user']);
  $userRow=mysqli_fetch_array($res);
?>
<?php
  if (!empty($_SESSION['user'])) {
    if ($_SESSION['pesan']=='sukses'){
    $_SESSION['pesan']='';
    $id_admin=$_SESSION['user'];
    $sql=mysqli_query($con,"SELECT * from tb_admin WHERE id_admin=$id_admin");
    while($hasil=mysqli_fetch_assoc($sql)){
 ?>
 <script type="text/javascript">
   swal({
     text: "<img src='<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto'] ?>' width='100px' heigh='100px' class='circle'>",
     title: "Selamat Datang <b><?php echo $hasil['username']; ?></b>",
     html:true
   });
 </script>
<?php } } } ?>
